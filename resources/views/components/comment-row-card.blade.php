@props(['comment'])

<tr class="alert" role="alert">
     <th scope="row">{{$comment->blog_id}}</th>
     <td>{{$comment->name}}</td>
     <td>{{$comment->email}}</td>
     <td>{{$comment->message}}</td>
     <td>{{$comment->created_at}}</td>
     <td>
          <form method="POST" action="/dashboard/comments/{{$comment->id}}">
               @csrf
               @method('DELETE')
               <button class="text-black-500"><i class="fas fa-trash"></i></button>
          </form>
     </td>
     <td>
          <a href="/blog/{{$comment->blog_id}}" target="_blank"><i class="fas fa-external-link-alt"></i></a>
     </td>
</tr>
