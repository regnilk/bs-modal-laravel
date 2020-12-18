{{--TRIGGER BUTTON--}}
<span title="{{$title}}">
    @if($mode=='button')
        <button {{ $attributes->merge(['class' => "btn btn-$outline$colorClassTrigger"])}}
                style="cursor: pointer;"
                data-target="#confirm-{{$name}}-{{$id}}"
                data-toggle="modal"
                data-title="{{$title}}"
                data-url="{{$url}}"
                data-message="{{$message}}">
        @if(strlen(trim($icon)) > 0)
                <x-fa icon="{{$icon}}" class="mr-1"/>
            @endif
            {{$btnText}}
    </button>
    @else
        <span {{ $attributes->merge(['class' => "text-$colorClassTrigger"])}}
              style="cursor: pointer;"
              data-target="#confirm-{{$name}}-{{$id}}"
              data-toggle="modal"
              data-title="{{$title}}"
              data-url="{{$url}}"
              data-message="{{$message}}">
        @if(strlen(trim($icon)) > 0)
                <x-fa icon="{{$icon}}" class="mr-1"/>
            @endif
            {{$btnText}}
    </span>
    @endif
</span>

{{--MODAL--}}
<div class='modal fade' tabindex='-1' role='dialog' id='confirm-{{$name}}-{{$id}}'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class="modal-header {{$headerBgColor}}">
                <h5 class="modal-title {{$headerColor}}" id='modal-{{$name}}-title-{{$id}}'>{{$title}}</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'><x-fa icon="close" class="{{$closeColor}}"/></span>
                </button>
            </div>
            <div class='modal-body' id='modal-{{$name}}-body'>
                {!! $message !!}
                @if(isset($comment) and $comment)
                    <p class="text-muted mt-3 small">
                        @if(config('app.locale') == 'fr')
                            Vous pouvez laisser un commentaire :
                        @else
                            You can leave a comment :
                        @endif</p>
                    <textarea name="comment" cols="60" rows="5"></textarea>
                @endif
            </div>
            <div class='modal-footer'>
                <form id="modal-{{$name}}-form-{{$id}}" class="form" role="form" method="POST" action="{{$url}}">
                    @method("$method")
                    @csrf
                    <button type='submit' class='btn btn-{{$outline}}{{$colorClassModal}}' id='confirm-{{$name}}-btn-{{$id}}'>
                        <x-fa icon="{{$iconModal}}" class="mr-1"/>{{$modalBtnText}}
                    </button>
                    <button type='button' class='btn btn-{{$outline}}secondary' data-dismiss='modal'>
                        <x-fa icon="cancel" class="mr-1"/>
                        @if(config('app.locale') == 'fr')
                            Annuler
                        @else
                            Cancel
                        @endif
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
