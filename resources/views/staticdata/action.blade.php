<?php
    $auth_user= authSession();
?>
    {{ html()->form('DELETE', route('staticdata.destroy', $id))->attribute('data--submit', 'staticdata'.$id)->open() }}
        <div class="d-flex justify-content-end align-items-center">
            @if($auth_user->can('staticdata-edit'))
                <a class="mr-2 loadRemoteModel" href="{{ route('staticdata.edit', $id) }}" title="{{ __('message.update_form_title',['form' => __('message.servicetype') ]) }}"><i class="fas fa-edit text-primary"></i></a>
            @endif

            @if($auth_user->can('staticdata-delete'))
                <a class="mr-2 text-danger" href="javascript:void(0)" data--submit="staticdata{{$id}}"
                    data--confirmation='true' data-title="{{ __('message.delete_form_title',['form'=> __('message.servicetype') ]) }}"
                    title="{{ __('message.delete_form_title',['form'=>  __('message.servicetype') ]) }}"
                    data-message='{{ __("message.delete_msg") }}'>
                    <i class="fas fa-trash-alt"></i>
                </a>
            @endif
        </div>
    {{ html()->form()->close() }}

