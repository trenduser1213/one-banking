<!-- Modal 1 -->
<div class="modal fade" id="topUpModal" tabindex="-1" role="dialog" aria-labelledby="topUpModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Top Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/dashboard" method="POST">
            @csrf
            <div class="modal-body">
                    <div class="form-group">
                        <label for="bank_type" class="col-form-label">Bank Type:</label><br>
                        <select id="bank_type" name="bank_type">
                            @foreach ($banks as $bank)
                                <option value="{{ $bank->id }}">{{ $bank->name_bank }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-form-label">Amount:</label>
                        <textarea class="form-control" id="amount" name="amount"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Top Up</button>
                </div>
            </form>
        </div>
    </div>
</div>