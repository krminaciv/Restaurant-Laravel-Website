@props(['reservation'])

<tr class="alert" role="alert">
     <th scope="row">{{$reservation->name}}</th>
     <td>{{$reservation->email}}</td>
     <td>{{$reservation->telephone}}</td>
     <td>{{$reservation->datetime}}</td>
     <td>{{$reservation->guestNum}}</td>
     <td>{{$reservation->created_at}}</td>
     <td>
          <form method="POST" action="/dashboard/reservations/{{$reservation->id}}">
               @csrf
               @method('DELETE')
               <button class="text-black-500"><i class="fas fa-trash"></i></button>
          </form>
     </td>
</tr>
