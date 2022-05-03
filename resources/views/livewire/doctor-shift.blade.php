<div>
    <h1>Drop down for Doctor input</h1>
    <select name="doctor" id="doctor">
      @foreach($dname as $row)
        <option value="{{$row->id}}">{{$row->dame}}</option>
      @endforeach
    </select>
</div>
