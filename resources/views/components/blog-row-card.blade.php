@props(['item'])

<tr class="alert" role="alert">
     <th scope="row">{{$item->id}}</th>
     <th scope="row">{{$item->user_id}}</th>
     <td>{{$item->title}}</td>
     <td>{{$item->category}}</td>
     <td>{{$item->tags}}</td>
     <td>{{$item->created_at}}</td>
     <td>
          <form method="POST" action="/dashboard/blog/{{$item->id}}">
               @csrf
               @method('DELETE')
               <button class="text-black-500"><i class="fas fa-trash"></i></button>
          </form>
     </td>
     <td>
          <a href="/blog/{{$item->id}}" target="_blank"><i class="fas fa-external-link-alt"></i></a>
     </td>
</tr>
