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
    @elseif($mode=='badge')
        <span {{ $attributes->merge(['class' => "badge badge-$colorClassTrigger"])}}
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
            <form id="modal-{{$name}}-form-{{$id}}" class="form" role="form" method="POST" action="{{$url}}">
                @method("$method")
                @csrf
                <div class='modal-body' id='modal-{{$name}}-body'>
                    {!! $message !!}
                    @if(!is_null($comment))
                        <p class="text-muted mt-3 small">
                            @if(config('app.locale') == 'fr')
                                @if(is_null($commentRequired))
                                    Vous pouvez laisser un commentaire :
                                @else
                                    Vous devez laisser un commentaire :
                                @endif
                            @else
                                @if(is_null($commentRequired))
                                    You can leave a comment :
                                @else
                                    You must leave a comment :
                                @endif
                            @endif
                        </p>
                        <textarea name="comment" cols="60" rows="5" @if(!is_null($commentRequired)) required @endif></textarea>
                    @endif
                </div>
                <div class='modal-footer'>
                    
                    <button type='submit' class='btn btn-{{$outline}}{{$colorClassModal}}' id='confirm-{{$name}}-btn-{{$id}}'>
                        <x-fa icon="{{$iconModal}}" class="mr-1"/>{{$modalBtnText}}
                    </button>
                    <button type='button' class='btn btn-{{$outline}}secondary' data-dismiss='modal'>
                        <x-fa icon="cancel" class="mr-1"/>@if(config('app.locale') == 'fr')
                            Annuler
                        @else
                            Cancel
                        @endif
                    </button>
                
                </div>
            </form>
        </div>
    </div>
</div>
