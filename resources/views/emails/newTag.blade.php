Olá {!! $user->display_name !!}!

{!! $blueprint->actor->display_name !!} acabou de trocar a tag da discussão de {!! $blueprint->discussion->user->display_name !!} para uma tag que você está seguindo: {!! $blueprint->discussion->title !!}

Para ver a discussão, confira o link:
{!! app()->url() !!}/d/{!! $blueprint->discussion->id !!}

---

{!! $blueprint->post->content !!}
