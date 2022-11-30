@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="form-group">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            Categories
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Add New </button>

                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Title</th>
                                <th>descritption</th>
                            </tr>
                        </thead>
                        <tbody id="DispCate">

                        </tbody>
                    </table>
                </div>




                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Enter Category" name="" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <textarea name="description" placeholder="Enter Description" id="description" class="form-control" cols="50" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" onclick="savecategorydata()" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

<script>
    // $(window).load(function(){
    //     alert("load")
    //   //my code here
    // });
    // $(window).load(function() {
    //     // executes when complete page is fully loaded, including all frames, objects and images
    //     alert("load")
    // });


    // $(document).ready(function() {
    //     alert("ready")
    // });
    $(window).on('load', function(e) {
        // alert("load")
        $.ajax({
            url: "selectallcategorydata",
            success: function(response) {
                console.log(response);
                htmlTableData = ""
                response.forEach(element => {
                    // console.log(element.category_title);
                    htmlTableData += `<tr>
                        <td>${element.category_title}</td>
                        <td>${element.category_description}</td>
                    </tr>`
                    // console.log(element.category_description);
                });
                $("#DispCate").html(htmlTableData)
            }
        })
    })

    function savecategorydata() {
        event.preventDefault();
        // console.log("called");
        $.ajax({
            url: "selectallcategorydata",
            success: function(response) {
                console.log(response);
            }
        })
    }
</script>
@endpush