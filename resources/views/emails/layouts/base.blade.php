@include('emails.layouts.header')

<tbody>
    <tr>
        <td style="display:flex; justify-content:center;">
           <table style="border-top:3px solid #007bff;  margin-left:auto; margin-right:auto;  border-radius:3px; overflow:hidden; max-width:550px; width:100%; background:#fff;box-shadow:0px 0px 3px 0px rgba(0,0,0,.2); padding:20px">
                @yield('content')
           </table>
        <td>
    </tr>
</tbody>

@include('emails.layouts.footer')
