@extends('layouts.app')

@section('content')
<div class="">
    <div class="row">
        <div class="col-md-6 bg-primary">
            <div class="card-blue">
                <div class="card-body">
                    <div class="text-center pt-4">
                        <span class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="500.3900" height="150.12253"  viewBox="0 0 782.39009 634.12253" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="782.009 634.123 524.27 634.123 524.27 632.017 782.39 632.017 782.009 634.123" fill="#3f3d56"/><circle cx="6.81265" cy="6.81404" r="6.81334" fill="#e6e6e6"/><circle cx="41.30169" cy="6.81404" r="6.81334" fill="#e6e6e6"/><circle cx="75.79073" cy="6.81404" r="6.81334" fill="#e6e6e6"/><circle cx="110.27977" cy="6.81404" r="6.81334" fill="#e6e6e6"/><circle cx="144.76881" cy="6.81404" r="6.81334" fill="#e6e6e6"/><circle cx="179.25785" cy="6.81404" r="6.81334" fill="#e6e6e6"/><circle cx="213.74689" cy="6.81404" r="6.81334" fill="#e6e6e6"/><circle cx="248.23593" cy="6.81404" r="6.81334" fill="#e6e6e6"/><circle cx="282.72497" cy="6.81404" r="6.81334" fill="#e6e6e6"/><circle cx="317.21401" cy="6.81404" r="6.81334" fill="#e6e6e6"/><circle cx="6.81265" cy="41.73599" r="6.81334" fill="#e6e6e6"/><circle cx="41.30169" cy="41.73599" r="6.81334" fill="#e6e6e6"/><circle cx="75.79073" cy="41.73599" r="6.81334" fill="#e6e6e6"/><circle cx="110.27977" cy="41.73599" r="6.81334" fill="#6c63ff"/><circle cx="144.76881" cy="41.73599" r="6.81334" fill="#e6e6e6"/><circle cx="179.25785" cy="41.73599" r="6.81334" fill="#e6e6e6"/><circle cx="213.74689" cy="41.73599" r="6.81334" fill="#e6e6e6"/><circle cx="248.23593" cy="41.73599" r="6.81334" fill="#e6e6e6"/><circle cx="282.72497" cy="41.73599" r="6.81334" fill="#e6e6e6"/><circle cx="317.21401" cy="41.73599" r="6.81334" fill="#e6e6e6"/><circle cx="6.81265" cy="76.65794" r="6.81334" fill="#e6e6e6"/><circle cx="41.30169" cy="76.65794" r="6.81334" fill="#e6e6e6"/><circle cx="75.79073" cy="76.65794" r="6.81334" fill="#e6e6e6"/><circle cx="110.27977" cy="76.65794" r="6.81334" fill="#e6e6e6"/><circle cx="144.76881" cy="76.65794" r="6.81334" fill="#e6e6e6"/><circle cx="179.25785" cy="76.65794" r="6.81334" fill="#e6e6e6"/><circle cx="213.74689" cy="76.65794" r="6.81334" fill="#e6e6e6"/><circle cx="248.23593" cy="76.65794" r="6.81334" fill="#e6e6e6"/><circle cx="282.72497" cy="76.65794" r="6.81334" fill="#e6e6e6"/><circle cx="317.21401" cy="76.65794" r="6.81334" fill="#e6e6e6"/><circle cx="6.81265" cy="111.57988" r="6.81334" fill="#e6e6e6"/><circle cx="41.30169" cy="111.57988" r="6.81334" fill="#e6e6e6"/><circle cx="75.79073" cy="111.57988" r="6.81334" fill="#e6e6e6"/><circle cx="110.27977" cy="111.57988" r="6.81334" fill="#e6e6e6"/><circle cx="144.76881" cy="111.57988" r="6.81334" fill="#e6e6e6"/><circle cx="179.25785" cy="111.57988" r="6.81334" fill="#e6e6e6"/><circle cx="213.74689" cy="111.57988" r="6.81334" fill="#e6e6e6"/><circle cx="248.23593" cy="111.57988" r="6.81334" fill="#e6e6e6"/><circle cx="282.72497" cy="111.57988" r="6.81334" fill="#e6e6e6"/><circle cx="317.21401" cy="111.57988" r="6.81334" fill="#e6e6e6"/><circle cx="6.81265" cy="146.50183" r="6.81334" fill="#e6e6e6"/><circle cx="41.30169" cy="146.50183" r="6.81334" fill="#6c63ff"/><circle cx="75.79073" cy="146.50183" r="6.81334" fill="#e6e6e6"/><circle cx="110.27977" cy="146.50183" r="6.81334" fill="#e6e6e6"/><circle cx="144.76881" cy="146.50183" r="6.81334" fill="#e6e6e6"/><circle cx="179.25785" cy="146.50183" r="6.81334" fill="#e6e6e6"/><circle cx="213.74689" cy="146.50183" r="6.81334" fill="#e6e6e6"/><circle cx="248.23593" cy="146.50183" r="6.81334" fill="#e6e6e6"/><circle cx="282.72497" cy="146.50183" r="6.81334" fill="#e6e6e6"/><circle cx="317.21401" cy="146.50183" r="6.81334" fill="#e6e6e6"/><circle cx="6.81265" cy="181.42378" r="6.81334" fill="#e6e6e6"/><circle cx="41.30169" cy="181.42378" r="6.81334" fill="#e6e6e6"/><circle cx="75.79073" cy="181.42378" r="6.81334" fill="#e6e6e6"/><circle cx="110.27977" cy="181.42378" r="6.81334" fill="#e6e6e6"/><circle cx="144.76881" cy="181.42378" r="6.81334" fill="#e6e6e6"/><circle cx="179.25785" cy="181.42378" r="6.81334" fill="#e6e6e6"/><circle cx="213.74689" cy="181.42378" r="6.81334" fill="#e6e6e6"/><circle cx="248.23593" cy="181.42378" r="6.81334" fill="#e6e6e6"/><circle cx="282.72497" cy="181.42378" r="6.81334" fill="#e6e6e6"/><circle cx="317.21401" cy="181.42378" r="6.81334" fill="#e6e6e6"/><circle cx="6.81265" cy="216.34573" r="6.81334" fill="#e6e6e6"/><circle cx="41.30169" cy="216.34573" r="6.81334" fill="#e6e6e6"/><circle cx="75.79073" cy="216.34573" r="6.81334" fill="#6c63ff"/><circle cx="110.27977" cy="216.34573" r="6.81334" fill="#e6e6e6"/><circle cx="144.76881" cy="216.34573" r="6.81334" fill="#e6e6e6"/><circle cx="179.25785" cy="216.34573" r="6.81334" fill="#e6e6e6"/><circle cx="213.74689" cy="216.34573" r="6.81334" fill="#e6e6e6"/><circle cx="248.23593" cy="216.34573" r="6.81334" fill="#e6e6e6"/><circle cx="282.72497" cy="216.34573" r="6.81334" fill="#e6e6e6"/><circle cx="317.21401" cy="216.34573" r="6.81334" fill="#e6e6e6"/><circle cx="6.81265" cy="251.26768" r="6.81334" fill="#e6e6e6"/><circle cx="41.30169" cy="251.26768" r="6.81334" fill="#e6e6e6"/><circle cx="75.79073" cy="251.26768" r="6.81334" fill="#e6e6e6"/><circle cx="110.27977" cy="251.26768" r="6.81334" fill="#e6e6e6"/><circle cx="144.76881" cy="251.26768" r="6.81334" fill="#e6e6e6"/><circle cx="179.25785" cy="251.26768" r="6.81334" fill="#e6e6e6"/><circle cx="213.74689" cy="251.26768" r="6.81334" fill="#e6e6e6"/><circle cx="248.23593" cy="251.26768" r="6.81334" fill="#e6e6e6"/><circle cx="282.72497" cy="251.26768" r="6.81334" fill="#e6e6e6"/><circle cx="317.21401" cy="251.26768" r="6.81334" fill="#e6e6e6"/><circle cx="6.81265" cy="286.18963" r="6.81334" fill="#e6e6e6"/><circle cx="41.30169" cy="286.18963" r="6.81334" fill="#e6e6e6"/><circle cx="75.79073" cy="286.18963" r="6.81334" fill="#e6e6e6"/><circle cx="110.27977" cy="286.18963" r="6.81334" fill="#e6e6e6"/><circle cx="144.76881" cy="286.18963" r="6.81334" fill="#e6e6e6"/><circle cx="179.25785" cy="286.18963" r="6.81334" fill="#e6e6e6"/><circle cx="213.74689" cy="286.18963" r="6.81334" fill="#e6e6e6"/><circle cx="248.23593" cy="286.18963" r="6.81334" fill="#e6e6e6"/><circle cx="282.72497" cy="286.18963" r="6.81334" fill="#e6e6e6"/><circle cx="317.21401" cy="286.18963" r="6.81334" fill="#e6e6e6"/><circle cx="6.81265" cy="321.11157" r="6.81334" fill="#e6e6e6"/><circle cx="41.30169" cy="321.11157" r="6.81334" fill="#e6e6e6"/><circle cx="75.79073" cy="321.11157" r="6.81334" fill="#e6e6e6"/><circle cx="110.27977" cy="321.11157" r="6.81334" fill="#e6e6e6"/><circle cx="144.76881" cy="321.11157" r="6.81334" fill="#e6e6e6"/><circle cx="179.25785" cy="321.11157" r="6.81334" fill="#e6e6e6"/><circle cx="213.74689" cy="321.11157" r="6.81334" fill="#e6e6e6"/><circle cx="248.23593" cy="321.11157" r="6.81334" fill="#e6e6e6"/><circle cx="282.72497" cy="321.11157" r="6.81334" fill="#e6e6e6"/><circle cx="317.21401" cy="321.11157" r="6.81334" fill="#e6e6e6"/><path d="M609.20925,193.8305a8.614,8.614,0,0,1,8.614,8.614V547.00388a8.614,8.614,0,0,1-8.614,8.614H361.98784a8.614,8.614,0,0,1-8.614-8.614V202.44449a8.614,8.614,0,0,1,8.614-8.614H609.20925" transform="translate(-208.80496 -132.93873)" fill="#e6e6e6"/><path d="M362.99057,546.001H608.20632V203.44727H362.99057Z" transform="translate(-208.80496 -132.93873)" fill="#fff"/><path d="M553.64892,257.64283a1.72279,1.72279,0,0,1,1.72279,1.7228v3.4456a1.72279,1.72279,0,0,1-1.72279,1.72279H417.548a1.72278,1.72278,0,0,1-1.72279-1.72279v-3.4456a1.72278,1.72278,0,0,1,1.72279-1.7228h136.101" transform="translate(-208.80496 -132.93873)" fill="#e6e6e6"/><path d="M553.64892,274.0094a1.7228,1.7228,0,0,1,1.72279,1.7228v3.4456a1.72279,1.72279,0,0,1-1.72279,1.72279H417.548a1.72278,1.72278,0,0,1-1.72279-1.72279v-3.4456a1.72279,1.72279,0,0,1,1.72279-1.7228h136.101" transform="translate(-208.80496 -132.93873)" fill="#e6e6e6"/><path d="M553.64892,290.376a1.7228,1.7228,0,0,1,1.72279,1.72279v3.4456a1.7228,1.7228,0,0,1-1.72279,1.72279H417.548a1.72279,1.72279,0,0,1-1.72279-1.72279v-3.4456A1.72279,1.72279,0,0,1,417.548,290.376h136.101" transform="translate(-208.80496 -132.93873)" fill="#6c63ff"/><path d="M553.64892,307.10073a1.72279,1.72279,0,0,1,1.72279,1.72279v3.4456a1.72279,1.72279,0,0,1-1.72279,1.72279H417.548a1.72278,1.72278,0,0,1-1.72279-1.72279v-3.4456a1.72278,1.72278,0,0,1,1.72279-1.72279h136.101" transform="translate(-208.80496 -132.93873)" fill="#e6e6e6"/><path d="M553.64892,323.4673a1.72279,1.72279,0,0,1,1.72279,1.72279v3.4456a1.72279,1.72279,0,0,1-1.72279,1.7228H417.548a1.72278,1.72278,0,0,1-1.72279-1.7228v-3.4456a1.72278,1.72278,0,0,1,1.72279-1.72279h136.101" transform="translate(-208.80496 -132.93873)" fill="#e6e6e6"/><path d="M553.64892,339.83387a1.7228,1.7228,0,0,1,1.72279,1.72279v3.4456a1.72281,1.72281,0,0,1-1.72279,1.7228H417.548a1.7228,1.7228,0,0,1-1.72279-1.7228v-3.4456a1.72279,1.72279,0,0,1,1.72279-1.72279h136.101" transform="translate(-208.80496 -132.93873)" fill="#e6e6e6"/><path d="M418.41724,394.89a2.002,2.002,0,0,0-2,2v92.91552a2.0023,2.0023,0,0,0,2,2H552.5481a2.00229,2.00229,0,0,0,2-2V396.89a2.002,2.002,0,0,0-2-2Z" transform="translate(-208.80496 -132.93873)" fill="#6c63ff"/><polygon points="277.241 161.182 275.833 160.808 306.56 45.221 484.785 45.221 484.785 46.678 307.679 46.678 277.241 161.182" fill="#3f3d56"/><path d="M708.15259,194.17916a15.29091,15.29091,0,1,1,15.2909-15.29091A15.30831,15.30831,0,0,1,708.15259,194.17916Zm0-29.12554a13.83463,13.83463,0,1,0,13.83462,13.83463A13.85037,13.85037,0,0,0,708.15259,165.05362Z" transform="translate(-208.80496 -132.93873)" fill="#3f3d56"/><circle cx="499.34763" cy="45.94952" r="5.82511" fill="#6c63ff"/><polygon points="272.477 356.941 273.884 357.317 242.937 472.845 64.712 472.504 64.715 471.047 241.82 471.387 272.477 356.941" fill="#3f3d56"/><path d="M258.98467,589.39543A15.29091,15.29091,0,1,1,243.66449,604.657,15.30832,15.30832,0,0,1,258.98467,589.39543Zm-.05582,29.12548a13.83463,13.83463,0,1,0-13.80809-13.86111A13.85036,13.85036,0,0,0,258.92885,618.52091Z" transform="translate(-208.80496 -132.93873)" fill="#3f3d56"/><circle cx="50.15041" cy="471.74758" r="5.82511" fill="#6c63ff"/><polygon points="616.828 600.594 606.551 600.594 608.386 543.702 635.548 545.17 616.828 600.594" fill="#ffb8b8"/><path d="M827.0356,766.22887c-3.10207,1.41577-5.70046-10.05467-8.31711-7.48324-7.31912,7.19262-14.8815,8.75887-24.65094,5.61857l-.22627-.03823a4.57524,4.57524,0,0,1-2.88382-5.96221h0a4.57524,4.57524,0,0,1,3.17428-2.83216l7.78388-1.946,12.22181-21.49353,12.47673-.84288h0a29.80836,29.80836,0,0,1,5.51307,25.42887C830.995,761.29929,829.24714,765.21954,827.0356,766.22887Z" transform="translate(-208.80496 -132.93873)" fill="#2f2e41"/><polygon points="714.467 593.074 704.91 596.854 685.691 543.275 711.489 534.65 714.467 593.074" fill="#ffb8b8"/><path d="M936.60125,755.901c-2.36392,2.45747-8.999-7.25324-10.48647-3.89965-4.16062,9.38044-10.61684,13.61835-20.8565,14.2914l-.22447.04767a4.57523,4.57523,0,0,1-4.87458-4.48361h0a4.57524,4.57524,0,0,1,1.91009-3.80114l6.52254-4.67249L912.0516,728.901l11.29216-5.37276h0a29.80835,29.80835,0,0,1,14.47942,21.6187C938.47,749.86063,938.28653,754.149,936.60125,755.901Z" transform="translate(-208.80496 -132.93873)" fill="#2f2e41"/><path d="M892.07129,451.2996l-15.77836,4.05729a8.25773,8.25773,0,0,1-10.30815-7.68019v0a8.25773,8.25773,0,0,1,8.51788-8.57081l13.8982.44833,26.78129-9.75184L889.869,410.92478l2.93635-26.42715,49.3313,39.604a8.19471,8.19471,0,0,1,3.04373,5.80637h0a8.19474,8.19474,0,0,1-6.00855,8.48733C927.61284,447.82846,910.77292,450.71754,892.07129,451.2996Z" transform="translate(-208.80496 -132.93873)" fill="#ffb8b8"/><circle cx="647.29605" cy="193.56598" r="25.69306" fill="#ffb8b8"/><path d="M887.66677,361.74092l-34.50212,13.94766a46.63067,46.63067,0,0,0-8.075-30.83168l28.62941-6.60679C873.34677,346.99393,878.075,354.80983,887.66677,361.74092Z" transform="translate(-208.80496 -132.93873)" fill="#ffb8b8"/><path d="M893.90651,421.56905c-27.81248,2.226-43.02531-1.4673-66.43492-15.04879l8.809-20.55445h0a17.00141,17.00141,0,0,1,7.00343-16.27794l9.1465-6.47877,27.89532-8.075,1.2513.06256A15.2693,15.2693,0,0,1,896.039,369.27584C902.09918,387.38638,902.13847,404.89273,893.90651,421.56905Z" transform="translate(-208.80496 -132.93873)" fill="#6c63ff"/><path d="M888.40086,464.51318l-59.4611-6.60679-4.40452-19.08628c-9.763-14.73785-5.50172-28.23741,5.8727-41.1089,20.73295,13.306,39.9782,19.05585,67.536,14.68175C890.61535,430.21634,883.847,447.73282,888.40086,464.51318Z" transform="translate(-208.80496 -132.93873)" fill="#2f2e41"/><path d="M934.64837,686.94171l-47.34865-2.56931L871.88389,561.77978,859.4044,683.63832,803.2467,681.069c17.13051-80.11107,29.03118-156.16275,25.69306-226.099l58.727,5.13861C907.57,481.09432,917.45251,514.59373,923.27,554.4389S933.77635,640.475,934.64837,686.94171Z" transform="translate(-208.80496 -132.93873)" fill="#2f2e41"/><circle cx="675.58002" cy="161.34488" r="8.83132" fill="#2f2e41"/><path d="M875.28507,292.12157a8.82437,8.82437,0,0,1,8.82714-8.25412c-.18236-.02313-.36309-.05126-.549-.06321a8.83132,8.83132,0,0,0-1.13325,17.62625c.18595.01195.36879.0072.55261.00761A8.82436,8.82436,0,0,1,875.28507,292.12157Z" transform="translate(-208.80496 -132.93873)" fill="#2f2e41"/><path d="M875.23523,295.89278c-7.87608-6.53374-30.4669,1.77036-31.92466,6.16308-10.65074,1.45149-18.71465,7.66553-18.71465,18.71459v.00006c6.33219,2.59406,13.53384,2.27438,21.31879,0,12.40986,10.11331,13.26059,22.82682,5.71348,37.4293l9.285.18568,11.50907-16.82092.55038,17.06213,21.28338-.42689V333.7487a51.12092,51.12092,0,0,0-5.45822-23.42036C885.48113,303.88488,880.33405,300.12257,875.23523,295.89278Z" transform="translate(-208.80496 -132.93873)" fill="#2f2e41"/><ellipse cx="646.6112" cy="200.24128" rx="4.22316" ry="5.91243" fill="#ffb8b8"/><path d="M823.11342,559.92824a1.483,1.483,0,0,1,1.483,1.483v59.31928a1.483,1.483,0,0,1-1.483,1.483h-42.5616a1.483,1.483,0,0,1-1.483-1.483V561.41123a1.483,1.483,0,0,1,1.483-1.483h42.5616" transform="translate(-208.80496 -132.93873)" fill="#6c63ff"/><path d="M828.93976,537.92193l1.43732,24.91342a10.8188,10.8188,0,0,1-12.37492,11.3268h0c-6.32954-.93081-6.47336-7.121-4.92171-13.32762l5.91167-23.64668c14.50235-51.99824,18.41745-103.03575,17.68369-152.8119A12.4975,12.4975,0,0,1,849.50966,371.662h0A12.4912,12.4912,0,0,1,861.631,384.58919C859.57812,443.03942,851.05293,496.1186,828.93976,537.92193Z" transform="translate(-208.80496 -132.93873)" fill="#ffb8b8"/></svg>
                            </span>
                            <h1 class="fw-bolder fs-2qx text-white">Welcome To Absensi</h1>
                            <p class="fw-bold fs-2qx pt-3 text-white">Absensi gak pake ribet</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 793 551.73152" xmlns:xlink="http://www.w3.org/1999/xlink"><ellipse cx="158" cy="539.73152" rx="158" ry="12" fill="#e6e6e6"/><path d="M324.27227,296.55377c27.49676-11.6953,61.74442-4.28528,95.19092.85757.31124-6.228,4.08385-13.80782.132-18.15284-4.80115-5.2788-4.35917-10.82529-1.47008-16.40375,7.38788-14.265-3.1969-29.44375-13.88428-42.0647a23.66937,23.66937,0,0,0-19.75537-8.29179l-19.7975,1.41411A23.70939,23.70939,0,0,0,343.635,230.85851v0c-4.72724,6.42917-7.25736,12.84055-5.66438,19.21854-7.08065,4.83882-8.27029,10.67977-5.08851,17.2644,2.698,4.14592,2.66928,8.18161-.12275,12.1056a55.89079,55.89079,0,0,0-8.31011,16.5061Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><path d="M977.70889,651.09727H417.29111A18.79111,18.79111,0,0,1,398.5,632.30616h0q304.727-35.41512,598,0h0A18.79111,18.79111,0,0,1,977.70889,651.09727Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><path d="M996.5,633.41151l-598-1.10536,69.30611-116.61553.3316-.55268V258.13057a23.7522,23.7522,0,0,1,23.75418-23.75418H899.792a23.7522,23.7522,0,0,1,23.75418,23.75418V516.90649Z" transform="translate(-203.5 -174.13424)" fill="#3f3d56"/><path d="M491.35028,250.95679a7.74623,7.74623,0,0,0-7.73753,7.73753V493.03073a7.74657,7.74657,0,0,0,7.73753,7.73752H903.64972a7.74691,7.74691,0,0,0,7.73753-7.73752V258.69432a7.74657,7.74657,0,0,0-7.73753-7.73753Z" transform="translate(-203.5 -174.13424)" fill="#fff"/><path d="M493.07794,531.71835a3.32522,3.32522,0,0,0-3.01275,1.93006l-21.35537,46.42514a3.31594,3.31594,0,0,0,3.01221,4.7021H920.81411a3.3157,3.3157,0,0,0,2.96526-4.79925L900.5668,533.55126a3.29926,3.29926,0,0,0-2.96526-1.83291Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><circle cx="492.34196" cy="67.97967" r="4.97412" fill="#fff"/><path d="M651.69986,593.61853a3.32114,3.32114,0,0,0-3.20165,2.4536l-5.35679,19.89649a3.31576,3.31576,0,0,0,3.20166,4.17856h101.874a3.31531,3.31531,0,0,0,3.13257-4.40093l-6.88691-19.89649a3.31784,3.31784,0,0,0-3.13366-2.23123Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><polygon points="720.046 337.135 720.046 341.556 264.306 341.556 264.649 341.004 264.649 337.135 720.046 337.135" fill="#2f2e41"/><circle cx="707.33457" cy="77.37523" r="77.37523" fill="#6c63ff"/><path d="M942.89,285.223H878.77911a4.42582,4.42582,0,0,1-4.42144-4.42145V242.11391a4.42616,4.42616,0,0,1,4.42144-4.42144H942.89a4.42616,4.42616,0,0,1,4.42144,4.42144v38.68761A4.42582,4.42582,0,0,1,942.89,285.223Zm-64.11091-43.10906v38.68761h64.11415L942.89,242.11391Z" transform="translate(-203.5 -174.13424)" fill="#fff"/><path d="M930.73105,242.11391h-39.793V224.42814c0-12.80987,8.36792-22.10721,19.89649-22.10721s19.89648,9.29734,19.89648,22.10721Zm-35.37153-4.42144h30.95009V224.42814c0-10.413-6.36338-17.68576-15.475-17.68576s-15.47505,7.27281-15.47505,17.68576Z" transform="translate(-203.5 -174.13424)" fill="#fff"/><circle cx="707.33457" cy="86.21811" r="4.42144" fill="#fff"/><path d="M856.81994,421.28372H538.18006a5.90767,5.90767,0,0,1-5.90073-5.90073V336.342a5.90767,5.90767,0,0,1,5.90073-5.90072H856.81994a5.90767,5.90767,0,0,1,5.90073,5.90072V415.383A5.90767,5.90767,0,0,1,856.81994,421.28372Zm-318.63988-88.4821a3.5443,3.5443,0,0,0-3.54043,3.54043V415.383a3.54431,3.54431,0,0,0,3.54043,3.54044H856.81994a3.54431,3.54431,0,0,0,3.54043-3.54044V336.342a3.5443,3.5443,0,0,0-3.54043-3.54043Z" transform="translate(-203.5 -174.13424)" fill="#e6e6e6"/><circle cx="384.19021" cy="198.69546" r="24.03645" fill="#e6e6e6"/><path d="M643.203,356.80541a4.00608,4.00608,0,1,0,0,8.01215H832.06074a4.00607,4.00607,0,0,0,0-8.01215Z" transform="translate(-203.5 -174.13424)" fill="#e6e6e6"/><path d="M643.203,380.84186a4.00607,4.00607,0,1,0,0,8.01214H724.469a4.00607,4.00607,0,1,0,0-8.01214Z" transform="translate(-203.5 -174.13424)" fill="#e6e6e6"/><path d="M467.022,382.46241,408.1189,413.778l-.74561-26.09629c19.22553-3.20948,37.51669-8.7974,54.42941-17.8946l6.1605-15.22008a10.31753,10.31753,0,0,1,17.53643-2.67788l0,0a10.31753,10.31753,0,0,1-.90847,14.06885Z" transform="translate(-203.5 -174.13424)" fill="#ffb8b8"/><path d="M323.09819,563.26707v0a11.57378,11.57378,0,0,1,1.46928-9.36311l12.93931-19.85777a22.61221,22.61221,0,0,1,29.335-7.73927h0c-5.438,9.25647-4.67994,17.37679,1.87806,24.43365a117.63085,117.63085,0,0,0-27.93606,19.04492A11.57386,11.57386,0,0,1,323.09819,563.26707Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><path d="M469.70475,537.30274l0,0a22.20314,22.20314,0,0,1-18.87085,10.77909l-85.96027.65122-3.728-21.62264,38.026-11.18413-32.06116-24.60507L402.154,450.31277l63.65,59.32431A22.20317,22.20317,0,0,1,469.70475,537.30274Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><path d="M351.45266,685.17939H331.32124c-18.07509-123.89772-36.47383-248.14186,17.8946-294.51529l64.12231,10.43852L405.13646,455.532l-35.7892,41.00845Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><path d="M369.14917,713.24594h0a11.57381,11.57381,0,0,1-9.3632-1.46873l-21.85854-2.93814a22.61221,22.61221,0,0,1-7.741-29.33451v0c9.2568,5.43749,17.37707,4.67891,24.43354-1.8795,4.98593,10.06738,13.20093,9.45331,21.04657,17.93494A11.57385,11.57385,0,0,1,369.14917,713.24594Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/><path d="M399.1716,307.90158l-37.28042-8.94731c6.19168-12.6739,6.70155-26.77618,3.728-41.75406l25.35068-.74561C391.76421,275.08,394.16732,292.48081,399.1716,307.90158Z" transform="translate(-203.5 -174.13424)" fill="#ffb8b8"/><path d="M409.41752,423.55243c-27.13873,18.49308-46.31418.63272-60.94729-26.92346,2.03338-16.86188-1.259-37.04061-7.35672-58.96635a40.13762,40.13762,0,0,1,24.50567-48.40124h0l32.06116,13.421c27.22362,22.19038,32.582,46.227,22.36825,71.5784Z" transform="translate(-203.5 -174.13424)" fill="#6c63ff"/><path d="M331.32124,326.54178,301.4969,342.19956l52.9382,31.31555,7.366,18.16951a9.63673,9.63673,0,0,1-5.78925,12.73088h0a9.63673,9.63673,0,0,1-12.76159-8.54442l-.74489-12.66307-67.2838-22.20366a15.73306,15.73306,0,0,1-9.87265-9.61147v0a15.733,15.733,0,0,1,5.90262-18.30258l54.10485-37.11845Z" transform="translate(-203.5 -174.13424)" fill="#ffb8b8"/><path d="M361.14557,329.52422c-12.43861-5.4511-23.74934.47044-38.026,5.21926l-2.23683-39.51725c14.17612-7.55568,27.69209-9.59281,40.26285-3.728Z" transform="translate(-203.5 -174.13424)" fill="#6c63ff"/><circle cx="172.52496" cy="78.09251" r="23.80211" fill="#ffb8b8"/><path d="M404.5,249.22353c-23.56616,2.30811-41.52338-1.54606-53-12.52007v-8.8377h51Z" transform="translate(-203.5 -174.13424)" fill="#2f2e41"/></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-0">
                <div class="card-white">
                    <div class="card-body border">
                        <div class="text-center">
                            <h1 class="fw-bolder fs-2qx text-dark pt-3">
                                Sign in to absensi
                            </h1>
                            <div class="d-flex justify-content-center">
                                <h4 class="text-secondary">New Here? </h4>
                                <h4 class="text-info">&nbsp;Create An Account</h4>
                            </div>
                        </div>
                        <div class="offset-md-3">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="" class="">Masukkan email</label>
                                    <input type="email" name="" id="" class="form-control col-8" required>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between col-8 p-0">
                                        <label for="" class="">Masukkan password</label>
                                        <label for="" class="text-primary">Lupa password?</label>
                                    </div>
                                    <input type="password" name="" id="" class="form-control col-8" required>
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-info">Login</button>

                                    <a href="{{url('login/github')}}"
                                     type="submit" class="btn btn-outline-dark">Login with GitHub
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


