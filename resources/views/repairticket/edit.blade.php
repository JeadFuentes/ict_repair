<x-app-layout>
    <div class = "container">
        <div class="text-center">
            <p class="h1">EDIT REQUEST</p>
        </div>
        <form action="admin.php" method="post" enctype = "multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="hidden" class="form-id" name="form-ids" id="form-id" value="{{ $repairticket->id }}">
                </div>
                <div class="form-group">
                    <label for="form-timestamp">Time Stamp</label>
                    <input type="text" id="form-timestamp" class="form-control textcaps" name="form-timestamps" {{$repairticket->created_at}} readonly>
                </div>
                <div class="form-group">
                    <label for="form-division">Division</label>
                    <input type="text" class="form-control textcaps" name="form-divisions" id="form-division" readonly>
                </div>
                <div class="form-group">
                    <label for="form-unitsection">Unit/Section</label>
                    <input type="text" class="form-control textcaps" name="form-unitsections" id="form-unitsection" readonly>
                </div>
                <div class="form-group">
                    <label for="form-requestedby">Requested By</label>
                    <input type="text" class="form-control textcaps" name="form-requestedbys" id="form-requestedby" readonly>
                </div>
                <div class="form-group">
                    <label for="form-designation">Designation</label>
                    <input type="text" class="form-control textcaps" name="form-designations" id="form-designation" readonly>
                </div>
                <div class="form-group">
                    <label for="form-typeofrequest">Type of Request</label>
                    <input type="text" class="form-control textcaps" name="form-typeofrequests" id="form-typeofrequest" readonly>
                </div>
                <div class="form-group">
                    <label for="form-description">description</label>
                    <input type="text" class="form-control textcaps" name="form-descriptions" id="form-description" readonly>
                </div>
                <div class="form-group">
                    <label for="form-status">Status</label>
                    <select class="form-control" name="form-statuss" id="form-status">
                    <option>Ongoing</option>
                    <option>Onhold</option>
                    <option>Closed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="form-comment">Additional Comment</label>
                    <textarea class="form-control textupper" name="form-comments" id="form-comment" rows="3"></textarea>
                </div>
                <div class="form-btn">
                        <input type="submit" class="btn btn-primary" value="Save" name="save">
                        <a href="{{Route('repairticket.index')}}" class="btn btn-danger">CANCEL</a>
                </div>
        </form>
    </div>
</x-app-layout>

