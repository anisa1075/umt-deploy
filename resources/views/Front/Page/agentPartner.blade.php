@extends('Front.baseFront')

@section('content')
    <section class=" pt-32 pb-20 container mx-auto" id="contact">
        <table style="margin: 0 20px; border-collapse: collapse; border-spacing: 20px; table-layout: fixed;">
            <thead
                style="color: #537938; font-family: Poppins, sans-serif; font-weight: 600; text-decoration: underline; letter-spacing: 1px;">
                <tr>
                    <th style="width: 10%; padding: 10px 14px;"></th>
                    <th style="width: 22.5%; padding: 10px 14px;">Member Name</th>
                    <th style="width: 22.5%; padding: 10px 14px;">Number Phone</th>
                    <th style="width: 22.5%; padding: 10px 14px;">Email</th>
                    <th style="width: 22.5%; padding: 10px 14px;">Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $row)
                    <tr>
                        <td style="padding: 8px 14px; text-align: center;">
                            <img src={{ asset('storage/' . $row->img) }} alt="">
                        </td>
                        <td style="padding: 8px 14px; font-weight: bold;">{{ $row->name }}</td>
                        <td style="padding: 8px 14px;">{{ $row->phone }}</td>
                        <td style="padding: 8px 14px;">{{ $row->email }}</td>
                        <td style="padding: 8px 14px;">{{ $row->alamat_perusahaan }}</td>
                    </tr>
                    <!-- Tambahkan <hr> di dalam td setelah setiap baris -->
                    <tr>
                        <td colspan="5">
                            <hr style="border: 1px solid #ccc;">
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>






    </section>
@endsection
