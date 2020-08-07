Olá {!! $user->display_name !!}!


{!! $blueprint->post->user->display_name !!} fez uma publicação em uma discussão de tag que você está seguindo: {!! $blueprint->post->discussion->title !!}

Para ver a nova atividade, confira o seguinte link:
{!! app()->url() !!}/d/{!! $blueprint->post->discussion_id !!}/{!! $blueprint->post->number !!}

---

{!! $blueprint->post->content !!}

---

Você não receberá nenhuma outra notificação desta discussão até estar atualizado.