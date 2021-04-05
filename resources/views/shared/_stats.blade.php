<a href="#">
  <strong id="following" class="stat">
    {{ count($user->followings) }}
  </strong>
    Followers
</a>
<a href="#">
  <strong id="followers" class="stat">
    {{ count($user->followers) }}
  </strong>
  Fans
</a>
<a href="#">
  <strong id="statuses" class="stat">
    {{ $user->statuses()->count() }}
  </strong>
  Blog Post
</a>