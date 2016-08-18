<!-- assignModal -->
<div id="assignModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Assign a new teacher</h4>
            </div>
            <div class="modal-body">
                <div class="radio"><label><input type="radio" name="newTeacher">
                        <span class="teacherName">Johannes Kepler</span>
                    </label></div>
                <div class="radio"><label><input type="radio" name="newTeacher">
                        <span class="teacherName">Galileo Galilei</span>
                    </label></div>
                <div class="radio"><label><input type="radio" name="newTeacher">
                        <span class="teacherName">Isaac Newton</span>
                    </label></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="assignTeacher(studentId)">
                    SET
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </div>
</div>