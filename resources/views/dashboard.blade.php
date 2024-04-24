<x-app-layout>
    <div class="text-center pb-3">
        @session('message')
            <div class="alert alert-success">{{session('message')}}</div>
        @endsession
    </div>
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
                                <div class="form-group">
                                    <select class="form-control" name="division" id="form-division">
                                    <option>All</option>
                                    <option>Ongoing</option>
                                    <option>Onhold</option>
                                    <option>Closed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <table class="table table-striped ">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID/#</th>
                        <th scope="col">Timestamp</th>
                        <th scope="col" hidden>Email</th>
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
                        @php
                            if (division = "All"){
                                $Repairtickets = repairticket::query()->orderby('created_at', 'desc')->where('status', All);
                            }
                            elseif (division = "Ongoing") {
                                $Repairtickets = repairticket::query()->orderby('created_at', 'desc')->where('status', Ongoing);
                            }
                        @endphp
                        @foreach ($repairtickets as $repairticket)
                        <tr>
                            <th class = "id" scope="row">{{$repairticket->id}}</th>
                            <td class = "timestamp">{{$repairticket->created_at}}</td>
                            <td class = "email" hidden>{{$repairticket->emailaddress}}</td>
                            <td class = "division">{{$repairticket->division}}</td>
                            <td class = "name">{{$repairticket->name}}</td>
                            <td class = "unitsection">{{$repairticket->unitsection}}</td>
                            <td class = "designation">{{$repairticket->designation}}</td>
                            <td class = "typeofrequest">{{$repairticket->typeofrequest}}</td>
                            <td class = "description">{{$repairticket->description}}</td>
                            <td class = "addtlstatus" hidden></td>
                            <td class = "status">{{$repairticket->status}}</td>
                            <td>
                                <div class="float-right">
                                <a href="{{ Route('repairticket.edit',['repairticket' => $repairticket]) }}" class="edit"><p class="btn btn-primary btn-sm">Edit</p></a>
                                <form action="{{ Route('repairticket.delete',['repairticket' => $repairticket]) }}" method="POST" enctype = "multipart/form-data" class="float-right">
                                    @csrf
                                    @method('delete')
                                    <button> <a class="delete"><p class="btn btn-danger btn-sm">Delete</p></a></button>
                                </form>
                            </div>
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
