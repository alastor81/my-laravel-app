<head>
    <meta charset="UTF-8">
</head>

<A NAME="table0"><h1>{{ $student['name'] }}: <em>{{ $student['class'] }}</em></h1></A>
<table cellspacing="0" border="0">
    <colgroup width="75"></colgroup>
    <colgroup width="76"></colgroup>
    <colgroup width="98"></colgroup>
    <colgroup width="62"></colgroup>
    <colgroup width="61"></colgroup>
    <colgroup width="68"></colgroup>
    <colgroup width="136"></colgroup>
    <colgroup width="36"></colgroup>
    <tr>
        <td height="24" align="left" valign=bottom><br></td>
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom sdnum="1033;0;0"><b><font face="B Mitra">رتبه درکلاس</font></b></td>--}}
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom sdnum="1033;0;0.00"><b><font face="B Mitra">score</font></b></td>
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><b><font face="B Mitra">پایانی1+4</font></b></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdnum="1033;0;0.00"><b><font face="B Mitra">پایانی1</font></b></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdnum="1033;0;0.00"><b><font face="B Mitra">مستمر1</font></b></td>--}}
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><b><font face="B Mitra">lesson</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><b><font face="B Mitra">column</font></b></td>
    </tr>
    <tr>
        <td height="21" align="left" valign=bottom><br></td>
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0"><br></td>--}}
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0.00"><br></td>
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#C0C0C0"><br></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0.00"><b><font face="B Mitra"><br></font></b></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0.00"><b><font face="B Mitra"><br></font></b></td>--}}
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0"><b><font face="B Mitra"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0"><b><font face="B Mitra"><br></font></b></td>
    </tr>
    <?php $counter = 0;?>
    @foreach($score as $st)
        <?php $counter++;?>
        <tr>
        <td height="21" align="left" valign=bottom><br></td>
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="14" sdnum="1033;0;0"><b><font face="B Mitra">14</font></b></td>--}}
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="11.5" sdnum="1033;0;0.00"><b><font face="B Mitra">{{ $st['score'] }}</font></b></td>
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="10.75" sdnum="1033;0;0.00"><b><font face="B Mitra">10.75</font></b></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="6.75" sdnum="1033;0;0.00"><b><font face="B Mitra">6.75</font></b></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="13" sdnum="1033;0;0.00"><b><font face="B Mitra">13.00</font></b></td>--}}
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><b><font face="B Mitra">{{ $st['lesson'] }}</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom sdval="31" sdnum="1033;"><b><font face="B Mitra">{{ $counter }}</font></b></td>
    </tr>
    @endforeach
    <tr>
        <td height="21" align="left" valign=bottom><br></td>
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0"><br></td>--}}
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0.00"><br></td>
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#C0C0C0"><br></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0.00"><b><font face="B Mitra"><br></font></b></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0.00"><b><font face="B Mitra"><br></font></b></td>--}}
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0"><b><font face="B Mitra"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0"><b><font face="B Mitra"><br></font></b></td>
    </tr>

    <tr>
        <td height="21" align="left" valign=bottom><br></td>
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0"><br></td>--}}
        <td style="display:none;border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0.00"><br>                                </td>
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#C0C0C0"><br></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0.00"><b><font face="B Mitra"><br></font></b></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0.00"><b><font face="B Mitra"><br></font></b></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0"><b><font face="B Mitra"><br></font></b></td>--}}
    </tr>


    <tr>

        <td height="25" align="left" valign=bottom><br></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0"><br></td>

        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF" sdval="375.166666666667" sdnum="1033;0;0.00"><b><font face="B Mitra" size=3>{{ array_sum(array_column($score,'score')) }}</font></b></td>
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF" sdval="356.25" sdnum="1033;0;0.00"><b><font face="B Mitra" size=3>356.25</font></b></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF" sdval="234.5" sdnum="1033;0;0.00"><b><font face="B Mitra" size=3>234.50</font></b></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF" sdval="413" sdnum="1033;0;0.00"><b><font face="B Mitra" size=3>413.00</font></b></td>--}}
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="B Mitra" size=3>sum</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0"><b><font face="B Mitra"><br></font></b></td>
    </tr>
    <tr>
        <td height="25" align="left" valign=bottom><br></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#C0C0C0" sdnum="1033;0;0"><br></td>
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF" sdval="12.1021505376344" sdnum="1033;0;0.00"><b><font face="B Mitra" size=3>12.10</font></b></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF" sdval="11.491935483871" sdnum="1033;0;0.00"><b><font face="B Mitra" size=3>11.49</font></b></td>--}}
        {{--<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF" sdval="7.56451612903226" sdnum="1033;0;0.00"><b><font face="B Mitra" size=3>7.56</font></b></td>--}}
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF" sdval="13.3225806451613" sdnum="1033;0;0.00"><b><font face="B Mitra" size=3>{{ count($score) }}</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="B Mitra" size=3>average</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom bgcolor="#C0C0C0"><b><font face="B Mitra"><br></font></b></td>
    </tr>