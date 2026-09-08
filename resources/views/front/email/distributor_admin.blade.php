<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="x-apple-disable-message-reformatting">
    <title>Emailer</title>
    <style>
        @media (max-width: 480px) {
            .contact-link a {
                font-size: 12px !important;
                white-space: nowrap !important;
            }

            .text-center1 {
                padding: 32px 10px 0 10px !important;
            }

            .text-center2 {
                padding: 0 10px 37px 10px !important;
            }

            .text-fot td {
                padding: 5px 6px !important;
            }
        }
    </style>
</head>

<body style="margin:0; padding:0; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;">
    <center>
        <table cellpadding="0" cellspacing="0" border="0" width="100%"
            style="max-width:600px; width:100%; margin:0 auto; border:1px solid #DDDDDD">
           
            <tr>
                <td align="center" style="padding: 24px 0;">
                    <img src="{{ asset('public/front/images/email-log.png') }}" alt="logo"
                        style="max-width:150px; height:auto;">
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{ asset('public/front/images/email-banners.png') }}" alt="banner"
                        style="width: 100%; height: auto; display: block;">
                </td>
            </tr>
            <tr>
                <td class="text-center1"
                    style="padding: 34px 48px 0 48px; font-family: 'Rubik', sans-serif; color: #333333;">
                    <!--<h2 style=" font-size: 18px;">New Contact Enquiry Submission</h2>-->
                    <p style=" font-size: 14px; line-height: 20px;">
                        Hello Team,<br>
                            A new request to connect within the Contendre Solar distributor network has been submitted via the website.<br>
                            The distributor’s details are shared below for further coordination.
                    </p>
                </td>
            </tr>
            <tr>
                <td class="text-center2" style="padding: 0 48px 37px 48px">
                      <h2 style=" font-size: 18px;">Your Solar Details:</h2>
                    <table
                        style="border-radius: 5px;border: 1px solid #DDD;border-spacing: 0px;overflow: hidden;color: #333;font-family:  'Rubik', sans-serif;font-size: 14px;font-weight: 400;line-height: 22px;width: 100%;vertical-align: middle;">
                        <tbody>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Company Name :</td>
                                <td
                                    style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">
                                    {{ $data['company_name'] }}</td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Type of Business :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['company_business'] }}
                                </td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Company Email :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['company_email'] }}</td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Company Address :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['company_address'] }}</td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Company Number :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['company_number'] }}</td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Company Website :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['company_website'] }}</td>
                            </tr>
                            @if(!empty($data['officephone']))
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Office Phone :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['officephone'] }}</td>
                            </tr>
                            @endif
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">PAN Card Number :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['pannumber'] }}</td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">GST Number :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['gstnumber'] }}</td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Distributor Services :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['distributor_services'] }}</td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Preferred Partnership Area :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['area'] }}</td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Applicant Name :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['applicant_name'] }}</td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Designation :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['designation'] }}</td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Other Owners, Directors or Partners Details :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['other_owners_directors_partners_details'] }}</td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Mobile Number :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['applicant_number'] }}</td>
                            </tr>
                            <tr>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">Residence Address :</td>
                                <td style=" border: 1px solid #DDD;padding:9px 8px 8px 23px;">{{ $data['applicant_residence_address'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr class="text-fot">
                <td style="padding:5px 48px;background-color: #111111;">
                    <hr style="border:none; margin:0 0 10px;">
                    <table cellpadding="0" cellspacing="0" border="0" align="center" style="margin:0 auto;">
                        <tr>
                            <td align="center" colspan="2" style="padding-bottom:10px;">
                                <p
                                    style="font-size:14px; line-height: 20px; font-family:'Rubik', sans-serif; color:#FFFFFF;margin: 0; width: 100%;">
                                    If you have any urgent questions, feel free to contact us
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="contact-link" style="border-right:1px solid #888888; padding:5px;"
                                width="50%">
                                <a href="mailto:sales@contendresolar.com"
                                    style="display:inline-block; text-decoration:none; color:#FFFFFF; font-family:'Rubik', sans-serif; font-size:14px;">
                                    <img src="{{ asset('public/front/images/email-vector.png') }}"
                                        alt="email" style="max-width:16px; vertical-align:middle; margin-right:5px;">
                                    sales@contendresolar.com
                                </a>
                            </td>
                            <td align="center" class="contact-link" style="padding:5px;" width="40%">
                                <a href="tel:+919 136 457 555"
                                    style="display:inline-block; text-decoration:none; color:#FFFFFF; font-family:'Rubik', sans-serif; font-size:14px;">
                                    <img src="{{ asset('public/front/images/call-vector.png') }}"
                                        alt="phone" style="max-width:16px; vertical-align:middle; margin-right:5px;">
                                    +919 136 457 555
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center" style=" padding-top:12px;">
                    <p style=" font-size:12px; font-family:'Rubik', sans-serif; margin: 0;">
                        © <?php echo date('Y'); ?> Contendre Solar, Inc. All Rights Reserved.
                    </p>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>