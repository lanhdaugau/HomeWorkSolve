<div class="favorite-list-item">
    <div data-id="{{ $user->id }}" data-action="0" class="avatar av-m"
        style="background-image: url('{{ asset('storage/users-avatar') . '/' .( (Chatify::getUserWithAvatar($user)->avatar)? Chatify::getUserWithAvatar($user)->avatar : 'avatar.png' ) }}');">
    </div>
    <p>{{ strlen($user->name) > 5 ? substr($user->name,0,6).'..' : $user->name }}</p>
</div>
