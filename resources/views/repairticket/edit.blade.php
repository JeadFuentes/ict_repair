<x-app-layout>
    <div class = "container">
        <div class="text-center">
            <p class="h1">EDIT REQUEST</p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form action="{{ Route('repairticket.update', ['repairticket' => $repairticket])}}" method="post" enctype = "multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <input type="hidden" class="form-id" name="id" id="form-id" value="{{ $repairticket->id }}">
                </div>
                <div class="form-group">
                    <label for="emailaddress">Email address</label>
                    <input type="email" class="form-control" name="emailaddress" id="form-email" value="{{$repairticket->emailaddress}}" readonly>
                </div>
                <div class="form-group">
                    <label for="timestamp">Time Stamp</label>
                    <input type="text" id="form-timestamp" class="form-control textcaps" name="timestamps" value="{{$repairticket->created_at}}" readonly>
                </div>
                <div class="form-group">
                    <label for="division">Division</label>
                    <input type="text" class="form-control textupper" name="division" id="form-division" value="{{$repairticket->division}}" readonly>
                </div>
                <div class="form-group">
                    <label for="unitsection">Unit/Section</label>
                    <input type="text" class="form-control textcaps" name="unitsection" id="form-nitsection" value="{{$repairticket->unitsection}}"readonly>
                </div>
                <div class="form-group">
                    <label for="name">Requested By</label>
                    <input type="text" class="form-control textcaps" name="name" id="form-requestedby" value="{{$repairticket->name}}"readonly>
                </div>
                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control textcaps" name="designation" id="form-designation" value="{{$repairticket->designation}}" readonly>
                </div>
                <div class="form-group">
                    <label for="typeofrequest">Type of Request</label>
                    <input type="text" class="form-control textcaps" name="typeofrequest" id="form-typeofrequest" value="{{$repairticket->typeofrequest}}"readonly>
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <input type="text" class="form-control textcaps" name="description" id="form-description" value="{{$repairticket->description}}"readonly>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="form-status">
                    <option>Ongoing</option>
                    <option>Onhold</option>
                    <option>Closed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="addstatus">Additional Comment</label>
                    <textarea class="form-control textupper" name="addstatus" id="form-comment" rows="3"></textarea>
                </div>
                <div class="form-btn">
                        <input type="submit" class="btn btn-primary" value="Save" name="save">
                        <a href="{{Route('repairticket.index')}}" class="btn btn-danger">CANCEL</a>
                </div>
        </form>
    </div>
</x-app-layout>

