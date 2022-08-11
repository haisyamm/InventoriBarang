@extends('layouts.app_template')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="px-3">
            <h2>Add Maintenance Period</h2>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="h3 fw-bolder text-uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="12" r="9"></circle>
                    </svg>
                    Maintenance
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 25px;">
                        <div class="col-md-6 form-group mb-3">
                            <label for="Service Name" class="small fw-bolder text-uppercase">Service Name</label>
                            <input type="text" name="service_name" id="service_name" class="form-control mt-1" placeholder="Enter Service Name">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="Service Date" class="small fw-bolder text-uppercase">Service Date</label>
                            <input type="date" name="service_date" id="service_date" class="form-control mt-1" placeholder="Enter Service Date">
                        </div>
                    </div>
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-6 form-group mb-3">
                            <label for="Purchase Order" class="small fw-bolder text-uppercase">Purchase Order</label>
                            <input type="text" name="purchase_order" id="purchase_order" class="form-control mt-1" placeholder="Enter Purchase Order">
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="Purchase Date" class="small fw-bolder text-uppercase">Purchase Date</label>
                            <input type="date" name="purchase_date" id="purchase_date" class="form-control mt-1" placeholder="Enter Purchase Date">
                        </div>
                    </div>
                </div>
                <div class="ps-1">
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-6 form-group mb-3">
                            <label for="Vendor" class="small fw-bolder text-uppercase">Vendor</label>
                            <select name="vendor" id="vendor" class="form-control">
                                @foreach($vendor as $val)
                                <option value="{{ $val->code }}">{{ $val->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group mb-3">
                            <label for="Assets" class="small fw-bolder text-uppercase">Assets</label>
                            <select name="assets" id="assets" class="form-control">
                                @foreach($assets as $val)
                                <option value="{{ $val->id }}">{{ $val->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <div class="h3 fw-bolder text-uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" class="me-1 mb-1" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="12" r="9"></circle>
                        </svg>
                        Task
                    </div>
                    <div>
                        <a href="#" class="btn btn-icon border-dashed bg-dark-lt" data-bs-toggle="modal" data-bs-target="#modal-add-task">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <line x1="9" y1="12" x2="15" y2="12"></line>
                                <line x1="12" y1="9" x2="12" y2="15"></line>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="table-responsive border mt-1" style="height: 200px; overflow-y: auto;">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                            <tr>
                                <th class="w-1">#</th>
                                <th>Task Name</th>
                                <th>Duration</th>
                                <th class="text-center">Due Date</th>
                                <th class="text-center">Notes</th>
                                <th class="text-end">Status</th>
                            </tr>
                        </thead>
                        <tbody id="body-task-list">
                            <tr>
                                <td colspan="6" class="text-center strong border-dashed bg-dark-lt">No Task Added</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-light">Cancel</button>
                    <button class="btn btn-dark ms-3" onclick="onCreateMaintenance()">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
<!-- Modal add task -->
<div class="modal modal-dark fade" id="modal-add-task" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content rounded-10">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="h2">
                        Add Task
                    </span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body py-4">
                <div class="form-group mb-3">
                    <label for="Task Name" class="small fw-bolder">Task Name</label>
                    <input type="text" name="task_name" id="task_name" class="form-control mt-1" placeholder="Enter Task Name">
                </div>
                <div class="form-group mb-3">
                    <label for="Duration" class="small fw-bolder">Duration</label>
                    <input type="number" name="duration" id="duration" class="form-control mt-1" placeholder="Enter Duration">
                </div>
                <div class="form-group mb-3">
                    <label for="Due Date" class="small fw-bolder">Due Date</label>
                    <input type="date" name="due_date" id="due_date" class="form-control mt-1" placeholder="Enter Due Date">
                </div>
                <div class="form-group mb-3">
                    <label for="Notes" class="small fw-bolder">Notes</label>
                    <input type="text" name="notes" id="notes" class="form-control mt-1" placeholder="Enter Notes">
                </div>
                <div class="form-group mb-3">
                    <label for="Status" class="small fw-bolder">Status</label>
                    <input type="text" name="status" id="status" class="form-control mt-1" placeholder="Enter Status">
                </div>
            </div>
            <div class="modal-footer border-top py-3">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn btn-dark ms-3" onclick="onAddTask()">Add</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    // Create Maintenance Priod
    const onCreateMaintenance = () => {
        let dataBatch = {
            ...getFormInput(),
            task: draf_task_list,
        };

        requestServer({
            url: url + '/maintenance/periods/store',
            data: dataBatch,
            onSuccess: function(response) {
                console.log(response);
            }
        });
    }

    const getFormInput = () => {
        let service_name = $('#service_name').val();
        let service_date = $('#service_date').val();
        let purchase_order = $('#purchase_order').val();
        let purchase_date = $('#purchase_date').val();
        let vendor = $('#vendor').val();
        let assets = $('#assets').val();

        let dataBatch = {
            service_name: service_name,
            service_date: service_date,
            purchase_order: purchase_order,
            purchase_date: purchase_date,
            vendor: vendor,
            assets: assets,
        }

        return dataBatch;
    }

    // ==========================
    //Task ======================
    // Get task modal form
    let draf_task_list = [];
    let box_task_list = '#body-task-list';

    const onAddTask = () => {
        let dataBatch = getModalTaskForm();
        draf_task_list.push(dataBatch);
        drawTaskList();
    }

    const getModalTaskForm = () => {
        let task_name = $('#task_name').val();
        let duration = $('#duration').val();
        let due_date = $('#due_date').val();
        let notes = $('#notes').val();
        let status = $('#status').val();

        let dataBatch = {
            id: draf_task_list.length == 0 ? 1 : (draf_task_list[(draf_task_list.length - 1)]['id'] + 1),
            task_name: task_name,
            duration: duration,
            due_date: due_date,
            notes: notes,
            status: status,
        }

        return dataBatch;
    }

    const drawTaskList = () => {
        var view = '';
        $.each(draf_task_list, function(i, val) {
            view += viewTaskList({
                task_name: val['task_name'],
                duration: val['duration'],
                due_date: val['due_date'],
                notes: val['notes'],
                status: val['status']
            });
        });

        $(box_task_list).html(view);
    }

    const viewTaskList = ({
        task_name = '',
        duration = '',
        due_date = '',
        notes = '',
        status = ''
    }) => {
        var view = '<tr>' +
            '<td>' +
            '<span class="text-dark">' +
            '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">' +
            '<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>' +
            '<path d="M8.56 3.69a9 9 0 0 0 -2.92 1.95"></path>' +
            '<path d="M3.69 8.56a9 9 0 0 0 -.69 3.44"></path>' +
            '<path d="M3.69 15.44a9 9 0 0 0 1.95 2.92"></path>' +
            '<path d="M8.56 20.31a9 9 0 0 0 3.44 .69"></path>' +
            '<path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95"></path>' +
            '<path d="M20.31 15.44a9 9 0 0 0 .69 -3.44"></path>' +
            '<path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92"></path>' +
            '<path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69"></path>' +
            '</svg>' +
            '</span>' +
            '</td>' +
            '<td>' + task_name + '</td>' +
            '<td>' + duration + '</td>' +
            '<td class="text-center">' + due_date + '</td>' +
            '<td class="text-center">' + notes + '</td>' +
            '<td class="text-end">' + status + '</td>' +
            '</tr>';

        return view;
    }
</script>
@endpush