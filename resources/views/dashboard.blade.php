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
                        @foreach ($repairtickets as $repairticket)
                        <tr>
                            <th class = "id" scope="row">{{$repairticket->id}}</th>
                            <td class = "timestamp">{{$repairticket->created_at}}</td>
                            <td class = "division">{{$repairticket->division}}</td>
                            <td class = "name">{{$repairticket->name}}</td>
                            <td class = "unitsection">{{$repairticket->unitsection}}</td>
                            <td class = "designation">{{$repairticket->designation}}</td>
                            <td class = "typeofrequest">{{$repairticket->typeofrequest}}</td>
                            <td class = "description">{{$repairticket->description}}</td>
                            <td class = "addtlstatus" hidden></td>
                            <td class = "status">{{$repairticket->status}}</td>
                            <td>
                                
                                <a href="{{ Route('repairticket.edit', $repairticket) }}" class="edit"><p class="btn btn-primary btn-sm">Edit</p></a>

                                <a class="delete"><p class="btn btn-danger btn-sm">Delete</p></a>
                            </td>
                            </tr>
                        @endforeach
                       
                      
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
