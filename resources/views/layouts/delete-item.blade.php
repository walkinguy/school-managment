<div id="DeleteModal" class="modal fade text-danger" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <form action="" id="deleteForm" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('DELETE')
                    <h4 class="text-center" style="color:#000;">Are you sure you want delete this item?</h4>
                </div>
                <div class="modal-footer">
                    <centre>
                        <button type="button" class="btn btn-primary"  style="margin:10px;" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="" class="btn btn-danger" style="margin:10px;"data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                    </centre>
                </div>
            </div>
        </form>
    </div>
</div>
