<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background: #f3f3f3">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" class="modal-body d-flex flex-column" action="includes/form-handler.php">
                <input type="hidden" name="id" id="id">
                <div>
                    <span class="rounded-pill bg-warning p-2 text-white"><small>SK</small></span>&nbsp;&nbsp;Sonal Kale
                </div>

                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Task Title" required>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 mt-3">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <span><i class="fas fa-clipboard-list"></i>&nbsp;&nbsp;List</span>
                            </div>
                            <div class="flex-grow-1">
                                <select class="form-control" name="status" id="status">
                                    <option value="todo">Todo</option>
                                    <option value="doing">Doing</option>
                                    <option value="done">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mt-3">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <span><i class="fas fa-flag"></i>&nbsp;&nbsp;Priority</span>
                            </div>
                            <div class="flex-grow-1">
                                <select class="form-control" name="priority" id="priority">
                                    <option value="medium">Medium (default)</option>
                                    <option value="high">High</option>
                                    <option value="low">Low</option>
                                    <option value="lowest">Lowest</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>

                <div class="d-flex justify-content-between align-items-center my-2">
                    <div class="bg-light px-3 py-2 text-dark"><i class="fas fa-user"></i>&nbsp;&nbsp;Add Assignees</div>
                    <div class="bg-light px-3 py-2 text-dark"><i class="fas fa-tag"></i>&nbsp;&nbsp;Add Label</div>
                    <div class="bg-light px-3 py-2 text-dark"><i class="fas fa-bolt"></i>&nbsp;&nbsp;Add Sprint</div>
                    <div class="bg-light px-3 py-2 text-dark"><i class="fas fa-clock"></i>&nbsp;&nbsp;Add Due Date</div>
                </div>

                <div class="dropdown-divider"></div>

                <div>
                    <h6 class="mt-2">Description</h6>
                    <div class="form-group">
                        <textarea rows="3" class="form-control" name="description" id="description" required></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add Task</button>
            </form>
        </div>
    </div>
</div>