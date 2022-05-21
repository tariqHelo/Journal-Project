 <div class="card-body">
                     
    <div class="form-group row">
        <label for="example-datetime-local-input" class="col-2 col-form-label">Entry Date and time</label>
        <div class="col-10">
            <input class="form-control" type="datetime-local" name="entry_date" value="{{ old('entry_date', $journal->entry_date) }}" required/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Position Nr.</label>
        <div class="col-10">
            <input class="form-control" name="position_nr" type="number" value="{{ old('position_nr', $journal->position_nr) }}" required/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Symbol</label>
        <div class="col-10">
            <select name="symbol"  class="form-control form-control-lg"  required>
                <option value="0">-- Choose Symbol Type --</option>
                <option >EURUSD</option>
                <option>GBPUSD</option>
                <option>RSD</option>
                <option>BND</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Type</label>
        <div class="col-10">
            <select name="type" class="form-control form-control-lg"  required>
                <option value="0">-- Choose Type Type --</option>
                <option value="buy">Buy</option>
                <option value="sel">Sel</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Size</label>
        <div class="col-10">
            <input class="form-control" type="float" name="size" value="{{ old('size', $journal->size) }}" required/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Entry Price</label>
        <div class="col-10">
            <input class="form-control" type="float" name="entry_price" value="{{ old('entry_price', $journal->entry_price) }}"  required/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">S/L</label>
        <div class="col-10">
            <input class="form-control" type="float" name="s_l" value="{{ old('s_l', $journal->s_l) }}"  required/>
        </div>
    </div>
     <div class="form-group row">
        <label class="col-2 col-form-label">T/P</label>
        <div class="col-10">
            <input class="form-control" type="float" name="t_p" value="{{ old('t_p', $journal->t_p) }}" required/>
        </div>
    </div>
    <div class="form-group row">
        <label for="example-date-input" class="col-2 col-form-label">Exit Date and time</label>
        <div class="col-10">
            <input class="form-control" type="datetime-local" name="exit_date" value="{{ old('exit_date', $journal->exit_date) }}"  required/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Exit Price</label>
        <div class="col-10">
            <input class="form-control" type="float" name="exit_price" value="{{ old('exit_price', $journal->exit_price) }}" required/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Commission</label>
        <div class="col-10">
            <input class="form-control" type="float" name="commission" value="{{ old('commission', $journal->commission) }}" required/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Swap</label>
        <div class="col-10">
            <input class="form-control" type="float" name="swap" value="{{ old('swap', $journal->swap) }}" required/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-2 col-form-label">Profit</label>
        <div class="col-10">
            <input class="form-control" type="float" name="profit" value="{{ old('profit', $journal->profit) }}" required/>
        </div>
    </div>
    <!--end: Code-->
</div>
<div class="card-footer">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <button type="submit" class="btn btn-success mr-2">{{$button}}</button>
            <a href="{{route('journal.index')}}" class="btn btn-danger">Cancel</a>
        </div>
    </div>
</div>