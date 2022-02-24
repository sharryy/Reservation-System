<div>
    <div class="row probootstrap-gutter40">
        <div class="col-md-8">
            <h2 class="mt0">Reservation Form</h2>
            <form wire:submit.prevent="save" class="probootstrap-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="arrival-date">Arrival</label>
                            <input wire:model.lazy="arrival_date"
                                   type="text" class="form-control" id="arrival-date"
                                   aria-describedby="arrival">
                            @error('arrival_date') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="departure-date">Departure</label>
                            <input wire:model.lazy="departure_date"
                                   type="text" class="form-control" id="departure-date"
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
                                @error('amount') <span class="error text-danger">{{ $message }}</span> @enderror
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
                                @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input wire:model.lazy="birthday"
                                       type="text" class="form-control" id="birthday"
                                       aria-describedby="birthday">
                                @error('birthday') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cnic">CNIC #</label>
                                <input wire:model.lazy="cnic"
                                       type="text" class="form-control" id="cnic"
                                       aria-describedby="cnic">
                                @error('cnic') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    @endif
                    @if($show_pic_field)
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cnic_pic">Add CNIC</label>
                                <input wire:model="cnic_picture" type="file" class="form-control-file"
                                       id="cnic_pic">
                                @error('cnic_picture') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    @endif

                    @if($show_rating_field)
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="rating">Add Rating</label>
                                <input wire:model="rating" type="number" class="form-control"
                                       id="rating">
                                @error('rating') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    @endif
                </div>
                @if($errors->isEmpty())
                    <div class="form-group">
                        <button wire:click="save"
                                type="submit" class="btn btn-primary btn-lg">
                            Reserve
                        </button>
                    </div>
                @endif
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
