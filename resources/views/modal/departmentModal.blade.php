@extends('AddEditForm.index')

@section('departmentModal')

<div class="modal fade" id="departmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add more department form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('departmentModal') }}" method="POST">
                    @csrf
                    <div>
                        <label for="addDepartment" class="form-label">department name</label>
                        <input type="text" class="form-control @error('department') is-invalid @enderror" id="addDepartment" name="department">
                    </div>
                    @error('department')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                    <button type="submit" class=" m-2 btn btn-dark w-75">ADD</button>

                </form>
            </div>
        </div>
    </div>
</div>

<Script>
    var select_2 = document.getElementById("inputDepartment");
    var modal_2 = $('#departmentModal');
    select_2.addEventListener("change", function() {
        if (select_2.value === "optionAdd") {
            modal_2.modal('show');
        } else {
            modal_2.modal('hide');
        }
    });
</Script>
@endsection