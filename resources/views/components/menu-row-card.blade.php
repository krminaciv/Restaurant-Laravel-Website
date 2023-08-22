@props(['item'])

<tr class="alert" role="alert">
     <th scope="row">{{$item->id}}</th>
     <td>{{$item->title}}</td>
     <td>{{$item->ingredients}}</td>
     <td>{{$item->price}}</td>
     <td>{{$item->category}}</td>
     <td>
          <form method="POST" action="/dashboard/menu/{{$item->id}}">
               @csrf
               @method('DELETE')
               <button class="text-black-500"><i class="fas fa-trash"></i></button>
          </form>
     </td>
     <td></td>
</tr>
