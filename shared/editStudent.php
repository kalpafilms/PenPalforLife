<!-- editModal -->
<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Richard Feynman</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="stdFirstName" type="text" placeholder="Richard">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="stdLastName" type="text" placeholder="Feynman">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Language</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="stdLanguage" type="text" placeholder="English">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Parent mail</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="stdParentMail" type="text" placeholder="someone@mail.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Student Bio</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="5" id="stdBio" placeholder="Surely He's Joking"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="updateInfo(stdInfo)">UPDATE</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </div>
</div>