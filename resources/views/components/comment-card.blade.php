@props(['comment'])

<li class="comment">
     <div class="vcard bio">
          <img src="{{ asset('images/user-icon.png') }}" alt="Image placeholder">
     </div>
     <div class="comment-body">
          <h3>{{$comment->name}}</h3>
          <div class="meta mb-2">{{$comment->created_at}}</div>
          <p>{{$comment->message}}</p>
     </div>
</li>