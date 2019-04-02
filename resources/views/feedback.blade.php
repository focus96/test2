<div>Форма обратной связи

@isset($id)
	{{ $id }}
@endisset

@push('scripts')
    <script>alert(1);</script>
@endpush

</div>