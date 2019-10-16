<?php


namespace FoF\FollowTags\Listeners;

use Flarum\Discussion\Event\Started;
use Flarum\Post\Event\Posted;
use FoF\FollowTags\Jobs;
use Illuminate\Events\Dispatcher;

class QueueNotificationJobs
{
    public function subscribe(Dispatcher $events) {
        $events->listen(Started::class, [$this, 'whenDiscussionStarted']);
        $events->listen(Posted::class, [$this, 'whenPostCreated']);
    }

    public function whenDiscussionStarted(Started $event)
    {
        app('flarum.queue.connection')->push(
            new Jobs\SendNotificationWhenDiscussionIsStarted($event->discussion)
        );
    }

    public function whenPostCreated(Posted $event) {
        if (!$event->post->discussion->exists || $event->post->number == 1) return;

        app('flarum.queue.connection')->push(
            new Jobs\SendNotificationWhenReplyIsPosted($event->post, $event->post->discussion->last_post_number)
        );
    }
}