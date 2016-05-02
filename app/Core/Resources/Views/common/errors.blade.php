
@if ($errors->any())

    <!-- Form Error List -->
    <div class="danger-alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif