<x-app-layout>
    <div class = "container">
        <form action="admin.php" method="get" name="chkstatus" enctype = "multipart/form-data">
            <input type="hidden" class="form-Ongoing" name="form-status" id="nptstatus" >
            <input type="submit" id="btnsubmit" class="btn btn-primary" value="submit" name="btnsubmit" hidden>
        </form>
        <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-4"><h2>Employee <b>Details</b></h2></div>
                            <div class="col-sm-2"><h2>Select <b>Status</b></h2></div>
                            <div class="col-sm-6" style="display:flex;">
                                <div class="form-check" style="margin-left: 20px">
                                    <input class="form-check-input" type="radio" name="chkstatus" id="chkstatus" value="Ongoing" hidden>
                                    <label class="form-check-label" for="chkstatus">
                                    Ongoing
                                    </label>
                                </div>
                                <div class="form-check" style="margin-left: 20px">
                                    <input class="form-check-input" type="radio" name="chkstatus" id="chkstatus1" value="Onhold"  hidden>
                                    <label class="form-check-label" for="chkstatus1">
                                    Onhold
                                    </label>
                                </div>
                                <div class="form-check" style="margin-left: 20px">
                                    <input class="form-check-input" type="radio" name="chkstatus" id="chkstatus2" value="Closed" hidden>
                                    <label class="form-check-label" for="chkstatus2">
                                    Closed
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID/#</th>
                        <th scope="col">Timestamp</th>
                        <th scope="col">Division</th>
                        <th scope="col">Requested By:</th>
                        <th scope="col">Unit/Section</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Type of Request</th>
                        <th scope="col">Issues Encountered</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Repairticket as $Repairtickets)
                        <tr>
                            <th class = "id" scope="row">{{$Repairtickets->id}}</th>
                            <td class = "timestamp">{{$Repairtickets->created_at}}</td>
                            <td class = "division">{{$Repairtickets->division}}</td>
                            <td class = "name">{{$Repairtickets->name}}</td>
                            <td class = "unitsection">{{$Repairtickets->unitsection}}</td>
                            <td class = "designation">{{$Repairtickets->designation}}</td>
                            <td class = "typeofrequest">{{$Repairtickets->typeofrequest}}</td>
                            <td class = "description">{{$Repairtickets->description}}</td>
                            <td class = "addtlstatus" hidden></td>
                            <td class = "status"><</td>
                            <td>
                                <a class="edit"  title="Edit" data-toggle="tooltip" ><i class="material-icons">&#xE254;</i></a>
                                <a class="delete"  title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                            </tr>
                        @endforeach
                       
                      
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    
        <!-- edit modal -->
    
        <div id = "editmodal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class = "modalcontainer">
                    <form action="admin.php" method="post" enctype = "multipart/form-data">
                            <div class="form-group">
                            <input type="hidden" class="form-id" name="form-ids" id="form-id">
                            </div>
                            <div class="form-group">
                                <label for="form-timestamp">Time Stamp</label>
                                <input type="text" id="form-timestamp" class="form-control textcaps" name="form-timestamps" readonly>
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
            <!--delete Modal -->
        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">DELETE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="delete.php" method="post" enctype = "multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" class="form-id" name="del-ids" id="del-id">
                        <h1>Are You sure you want to DELETE?</h1>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger" value="Delete" name="delete">Delete</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
</x-app-layout>
