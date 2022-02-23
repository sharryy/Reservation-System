<div>
    <div class="row probootstrap-gutter40">
        <div class="col-md-8">
            <h2 class="mt0">Reservation Form</h2>
            <form wire:submit.prevent="save" class="probootstrap-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="arrival-date">Arrival</label>
                            <input wire:model="arrival_date" disabled
                                   type="date" class="form-control" id="arrival-date"
                                   aria-describedby="arrival">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="departure-date">Departure</label>
                            <input wire:model="departure_date"
                                   type="date" class="form-control" id="departure-date"
                                   aria-describedby="departure">
                            @error('departure_date') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    @if($show_amount_field)
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input wire:model.lazy="amount"
                                       type="number" class="form-control" id="amount"
                                       aria-describedby="amount">
                            </div>
                        </div>
                    @endif
                    @if($show_details_field)
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input wire:model="name"
                                       type="text" class="form-control" id="name"
                                       aria-describedby="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input wire:model="birthday"
                                       type="date" class="form-control" id="birthday"
                                       aria-describedby="birthday">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cnic">CNIC #</label>
                                <input wire:model.lazy="cnic"
                                       type="text" class="form-control" id="cnic"
                                       aria-describedby="cnic">
                            </div>
                        </div>
                    @endif
                    @if($show_pic_field)
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Add CNIC</label>
                                <input wire:model="cnic_picture" type="file" class="form-control-file"
                                       id="exampleFormControlFile1">
                            </div>
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <button wire:click="save"
                            type="submit" class="btn btn-primary btn-lg">
                        Reserve
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-4">
            <h2 class="mt0">Feedback</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                a large language ocean.</p>
            <p><a href="#" class="btn btn-primary" role="button">Send Message</a></p>
        </div>
    </div>
</div>
