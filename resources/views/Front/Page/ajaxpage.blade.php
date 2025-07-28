@foreach ($data as $row)
    <a href="{{ route('front.detail.destinasi', $row->id) }}">
        <p class=" font-Poppins font-semibold m-3 p-1 hover:bg-537938 hover:text-white duration-300 rounded-lg"
            style="letter-spacing: 1px;" id="read"> >
            {{ $row->negara }}
        </p>
    </a>
@endforeach
