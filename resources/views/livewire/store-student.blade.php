<div>
    @if($update==false)
    <center>
    <h2> Store Student Data </h2> <br>

    <form wire:submit.prevent="savedata">

    <div>
        <label> Name: </label>
        <input type="text" wire:model="name">
    </div>
    <br> <br>
    <div>
        <label> Email: </label>
        <input type="email" wire:model="email">
    </div>
    <br> <br>
    <div>
        <label> Image: </label>
        <input type="file" wire:model="image">
    </div>
    <br> <br>
    <div>
        <input type="submit" value="Save">
    </div>

    </form>
    </center>

    <br> <br>

    <table border="1px" width="50%" style="text-align: center">

    <tr>
        <th> Name </th>
        <th> Email </th>
        <th> Image </th>
        <th> Delete </th>
        <th> Update </th>
    </tr>

    @foreach($student as $student)

    <tr>
        <td> {{$student['name']}} </td>
        <td> {{$student['email']}} </td>

        <td> <img height="150" width="200" src="{{Storage::url($student['image'])}}"> </td>
        <td> <a style="cursor:pointer;" wire:click="deletestudent({{$student['id']}})"> Delete </a> </td>
        <td> <a style="cursor:pointer;" wire:click="updatestudent({{$student['id']}})"> Update </a> </td>
    </tr>

    @endforeach

    </table>

    @else

    <center>
    <h2> Update Student Data </h2> <br>

    <form wire:submit.prevent="updata">

    <input type="text" wire:model="s_id" hidden>

    <div>
        <label> Name: </label>
        <input type="text" wire:model="name">
    </div>
    <br> <br>
    <div>
        <label> Email: </label>
        <input type="email" wire:model="email">
    </div>
    <br> <br>
    <div>
        <label> Choose New Image: </label>
        <input type="file" wire:model="imageup">
    </div>
    <br> <br>
    <div>
        <input type="submit" value="Update">
    </div>

    </form>
    </center>

    @endif

</div>
