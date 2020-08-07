Olá {!! $user->display_name !!}!

{!! $blueprint->discussion->user->display_name !!} criou uma discussão em uma tag que você está seguindo: {!! $blueprint->discussion->title !!}

Para ver a nova discussão, confira o seguinte link:
{!! app()->url() !!}/d/{!! $blueprint->discussion->id !!}

---

{!! $blueprint->post->content !!}
