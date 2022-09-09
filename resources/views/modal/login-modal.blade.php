<div>
    <div wire:ignore class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header mx-auto">
                    <h5 class="modal-title fs-2 fw-bolder" id="loginModalLabel">{{ __('Login') }}</h5>
                </div>
                <div class="modal-body d-flex flex-column align-items-center">
                    <a role="button" class="btn btn-primary w-100" href="{{ route('login') }}">{{ __('Login with Discord') }}</a>
                    <div class="mt-3">
                        <div class="form-check form-switch">
                            <input wire:model="joinDiscord" class="form-check-input" type="checkbox" id="joinDiscord">
                            <label class="form-check-label" for="joinDiscord">{{ __('Join Discord Server') }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>