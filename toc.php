<?php

session_start();


$autologin = $_GET['autologin'];
$uname = $_GET['uname'];

if ($autologin=="true"){
$myusername = $uname;
session_register("myusername");
}
include('connect-db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Terms and Condition : Earth Deeds</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
 <div class="header">
    	<div class="logo"></div>
                <div class="login">
		<?php
		if ($username){
					echo '
        	       	<span class="style1">Logged in as </span><span class="style2"><a href="mystaff.php">'.$username.'</a>  | <a href="logout.php">Log Out</a></span> ';  
				
					}
					else
					{
					echo '<span style="margin: 0 50px 0 0;" class="style2"><a href="login.php">Login</a></span>';
					}
					?>
        </div>	
    <div class="clear"></div>
</div>

<div class="container">
	
    <div class="nav">
    	<ul>
           <div class="list"><a href="index.php">Home</a></div>
            <li><a href="mystuff.php">My Stuff</a></li>
            <li><a href="project-view.php">Projects</a></li>
            <li><a href="team-view.php">Teams</a></li>
            <li><a href="org-view.php">Orgs</a></li>
            <li><a href="measure.php">Measure</a></li>	
            <li><a href="reduce.php">Reduce</a></li>	
            <div class="list2"><a href="search.php">Search</a></div>
        </ul>
    </div>
    
     <div class="content"> <!-- start of Content ---------------------------------------------------- -->
<div style="margin: 20px 0 0 0;">
        	<div class="box">
 <p><strong>TERMS AND CONDITIONS</strong></p>
<p>These TERMS AND CONDITIONS were last revised on October 23rd, 2013. These TERMS AND CONDITIONS are subject to change at any time.</p>
<p>Welcome to Earth Deeds. This page explains the TERMS AND CONDITIONS by which you may use our service. By accessing or using the Earth Deeds services, website and software provided through or in connection with the service (&ldquo;Service&rdquo;), you signify that you have read, understood, and agree to be bound by this Terms of Use Agreement (&ldquo;Agreement&rdquo;), whether or not you are a registered user of our Service.</p>
<p>We reserve the right to amend this Agreement at any time and without notice. If we do this, we will post the amended Agreement on this page and indicate at the top of the page the date the Agreement was last revised. Your continued use of the Service after any such changes constitutes your acceptance of the new Terms of Use. If you do not agree to any of these terms or any future Terms of Use, do not use or access (or continue to access) the Service.</p>
<p>USE OF OUR SERVICE</p>
<p>Earth Deeds provides a place for the progressive community to interact, share information, and support content creation. All visitors to Earth Deeds, whether registered or not, are &ldquo;Users.&rdquo; If you register with Earth Deeds you become a &ldquo;User&rdquo; and gain access to certain features, including the ability to post certain information about your project (a Project&rdquo;) on the Service and interact with other Users about your project.</p>
<p>Earth Deeds grants you permission to use the Service as set forth in this Agreement, provided that: (i) you will not copy, distribute, or disclose any part of the Service in any medium; (ii) you will not alter or modify any part of the Service other than as may be reasonably necessary to use the Service for its intended purpose; and (iii) you will otherwise comply with the terms and conditions of this Agreement.</p>
<p>You do not have to register in order to visit Earth Deeds. To access certain features of the Service, though, including posting, commenting on, following, or contributing to a Project you will need to register with Earth Deeds and create a User account. Your account gives you access to the services and functionality that we may establish and maintain from time to time and in our sole discretion.</p>
<p>You may never use another User&rsquo;s account without permission. When creating your account, you must provide accurate and complete information. You are solely responsible for the activity that occurs on your account, and you must keep your account password secure. You must notify Earth Deeds immediately of any breach of security or unauthorized use of your account. Although Earth Deeds will not be liable for your losses caused by any unauthorized use of your account, you shall be liable for the losses of Earth Deeds or others due to such unauthorized use.</p>
<p>You may use your Settings to control your User Profile and how other Users communicate with you. By providing Earth Deeds your email address you consent to our using the email address to send you Service-related notices, including any notices required by law, in lieu of communication by postal mail. We may also use your email address to send you other messages, including changes to features of the Service and special offers.</p>
<p>You agree not to use or launch any automated system, including without limitation, &ldquo;robots,&rdquo; &ldquo;spiders,&rdquo; &ldquo;offline readers,&rdquo; etc., that accesses the Service in a manner that sends more request messages to the Earth Deeds servers than a human can reasonably produce in the same period of time by using a conventional on-line web browser.</p>
<p>You agree not to collect or harvest any personally identifiable information, including account names, from the Service nor to use the communication systems provided by the Service for any commercial solicitation purposes.</p>
<p>Earth Deeds may permanently or temporarily terminate, suspend, or otherwise refuse to permit your access to the Service without notice and liability, if, in Earth Deeds&rsquo; sole determination, you violate any of the Agreement, including the following prohibited actions: (i) attempting to interfere with, compromise the system integrity or security or decipher any transmissions to or from the servers running the Service; (ii) taking any action that imposes, or may impose at our sole discretion an unreasonable or disproportionately large load on our infrastructure; (iii) uploading invalid data, viruses, worms, or other software agents through the Service; (iv) impersonating another person or otherwise misrepresenting your affiliation with a person or entity, conducting fraud, hiding or attempting to hide your identity; (v) interfering with the proper working of the Service; or, (vi) bypassing the measures we may use to prevent or restrict access to the Service. Upon termination for any reason, you continue to be bound by this Agreement.</p>
<p>You may not use the Service for activities that: (i) violate any law, statute, ordinance or regulation; (ii) relate to sales of (a) narcotics, steroids, certain controlled substances or other products that present a risk to consumer safety, (b) drug paraphernalia, (c) items that encourage, promote, facilitate or instruct others to engage in illegal activity, (d) items that promote hate, violence, racial intolerance, or the financial exploitation of a crime, (e) items that are considered obscene, (f) items that infringe or violate any copyright, trademark, right of publicity or privacy or any other proprietary right under the laws of any jurisdiction, (g) certain sexually oriented materials or services, or (h) ammunition, firearms, or certain firearm parts or accessories, or (i) ,certain weapons or knives regulated under applicable law; (iii) relate to transactions that (a) show the personal information of third parties in violation of applicable law, (b) support pyramid or ponzi schemes, matrix programs, other &ldquo;get rich quick&rdquo; schemes or certain multi-level marketing programs, (c) are associated with purchases of real property, annuities or lottery contracts, lay-away systems, off-shore banking or transactions to finance or refinance debts funded by a credit card, (d) are for the sale of certain items before the seller has control or possession of the item, (e) are by payment processors to collect payments on behalf of merchants, (f), are associated with the following Money Service Business activities: the sale of traveler&rsquo;s checks or money orders, currency exchanges or check cashing,or (g) provide certain credit repair or debt settlement services; (iv) involve the sales of products or services identified by government agencies to have a high likelihood of being fraudulent; (v) violate applicable laws or industry regulations regarding the sale of (a) tobacco products, or (b) prescription drugs and devices; (vi) involve gambling, gaming and/or any other activity with an entry fee and a prize, including, but not limited to casino games, sports betting, horse or greyhound racing, lottery tickets, other ventures that facilitate gambling, games of skill (whether or not it is legally defined as a lottery) and sweepstakes unless the operator has obtained prior approval from Earth Deeds and the operator and customers are located exclusively in jurisdictions where such activities are permitted by law.</p>
<p>POSTING A PROJECT</p>
<p>Earth Deeds may provide you the opportunity to post your Project on Earth Deeds to showcase and share certain information about the Project and elicit feedback and financial contributions from other Users. Your Project is User Content (as defined below), and is subject to all the terms and conditions relating to User Content in this Agreement. It is a breach of this Agreement to post a false or misleading Project or to post false or misleading information in your Project Profile. Users who post Projects are sometimes referred to in this Agreement as &ldquo;Content Creators.&rdquo;</p>
<p>PROJECT FUNDRAISING</p>
<p>Earth Deeds may provide you the opportunity to fundraise for your Project by soliciting financial contributions to support the Project from Users (&ldquo;Contributions&rdquo;). The rules governing fundraising for your Project (the &ldquo;Fundraising Rules&rdquo;) are as follows:</p>
<p>1. The first step in launching a fundraising project using the Service is to create a Project profile page and post a &ldquo;Project Request.&rdquo; To post a Project Request, set your goal for the total Contributions you wish to raise during your current project (&ldquo;Project Goal&rdquo;) and the date by which you&rsquo;d like to raise the funds (&ldquo;Project Deadline&rdquo;) on your Project Profile page. The Project Deadline can be between 1 and 90 days out. (Note, if you reach your project goal, you can post a new Project to fund the next phase of your project. The number of Projects you can create is unlimited, but you may only have two project running concurrently.)</p>
<p>2. You will be required to designate the legal entity to which funds will be directed (the &ldquo;Project Entity&rdquo;). The term legal entity is used as a general term to describe all entities recognized by the law, including both juristic and natural persons. By providing the name of your Project Entity to Earth Deeds, you represent and warrant that you are an authorized representative of the Project Entity with the authority to bind the Project Entity to the terms of this Agreement, that the Project Entity is the legal entity responsible for the Project and accountable for the use of any funds raised for it on Earth Deeds, and that you accept this Agreement on the Project Entity&rsquo;s behalf.</p>
<p>3. To receive Contributions, your Project Entity must establish an account (a &ldquo;Funding Account&rdquo;) with the payment processor designated by Earth Deeds (currently PayPal) at the time you post your Project (the &ldquo;Processor&rdquo;). You understand and agree that your Funding Account will be governed by your agreement with the Processor, and that Earth Deeds shall have no liability for your Funding Account or your transactions or interactions with the Processor.</p>
<p>4. If your Project receives Project Funding by using Earth Deeds &lsquo;s platform and tools (including without limitation Project Funding paid into your Funding Account), you agree to acknowledge Earth Deeds by including the Earth Deeds logo in the &ldquo;Special Thanks&rdquo; section of the credits/acknowledgement section of your completed project as follows: using one of the Earth Deeds logos available in the Press section of Earth Deeds, the logo should appear on its own line (i.e., no other text or images on the left or right), sized so that the &ldquo;Earth Deeds&rdquo; lettering in the logo is at least three times the size of the credits&rsquo; normal text.</p>
<p>5. You may offer non-monetary rewards for Contributions (&ldquo;Rewards&rdquo;), provided that the offering of such Rewards is lawful under all applicable laws, including without limitation state and federal securities laws, and otherwise complies with the terms and conditions of this Agreement.</p>
<p>&nbsp;</p>
<p>Any Project Funding payments may be subject to verification of the identity of you and the Project Entity, the use of funds, and the time-line of the project. The verification procedure may involve an interview and/or document review if deemed necessary and may vary from time to time in our sole discretion. You and the Project Entity agree that Project Funding may only be used on behalf of the Project, and that Project Funding will not be used for any other purpose. You agree that if at any time during while a Project is open or within thirty (30) days of the close of a Project, Earth Deeds makes a good faith determination that the identity of you or the Project Entity or the time-line of the Project are not as identified in the Project Posting, or that the Project Funding has not been used solely on behalf of the Project, you will promptly refund the entire amount of Project Funding from such Project to the Contributors. We may change the Fundraising Rules at any time upon notice to you. If you do not accept a change we make to the Fundraising Rules, your sole remedy shall be to terminate your Project.</p>
<p>You shall have full responsibility for applicable taxes for all Project Funding paid to you under this Agreement, and for compliance with all applicable labor and employment requirements with respect to your self-employment, sole proprietorship or other form of business organization, and with respect to your employees and contractors, including state worker&rsquo;s compensation insurance coverage requirements and any U.S. immigration visa requirements. You agree to indemnify, defend and hold Earth Deeds harmless from any liability for, or assessment of, any claims or penalties with respect to such withholding taxes, labor or employment requirements, including any liability for, or assessment of, withholding taxes imposed on Earth Deeds by the relevant taxing authorities with respect to any Project Funding paid to you.</p>
<p>Earth Deeds makes no guarantee regarding the number or amount of Contributions, or the amount of any Project Funding payment to be made to you or the Project Entity under this Agreement.</p>
<p>CONTRIBUTING TO PROJECTS</p>
<p>Earth Deeds may provide you the opportunity to make Contributions to Projects on the Service.</p>
<p>It is solely your choice to contribute to a Project. You understand that making a Contribution to a Project does not give you any rights in or to that Project, including without limitation any ownership, control, or distribution rights, and that the Project Entity shall be free to solicit other funding for the Project, enter into contracts for the Project, allocate rights in or to the Project, and otherwise direct the Project in its sole discretion. You further understand that nothing in this Agreement or otherwise limits Earth Deeds&rsquo; right to enter into agreements or business relationships relating to Project. Earth Deeds does not guarantee that any Project Goal will be met. Any Rewards offered to you are between you and the Project Entity only, and Earth Deeds does not guarantee that Rewards will be delivered or satisfactory to you. Earth Deeds does not warrant the use of any Project Funding or the outcome of any Project.</p>
<p>Contributions to Project are nonrefundable. Under certain circumstances Earth Deeds may, but is under no obligation to, seek the refund of Project Funding if the Project Entity misrepresents the Project or misuses the funds. You acknowledge and agree that all your Contributions are between you, the Project Entity, and the Processor only, and that Earth Deeds is not responsible for Contribution transactions, including without limitation any personal or payment information you provide to the Processor.</p>
<p>Earth Deeds makes no representations regarding the deductibility of any Contribution for tax purposes. Please consult your tax advisor for more information.</p>
<p>USER CONTENT</p>
<p>Some areas of the Service may allow Users to post feedback, comments, questions, and other information. Any such postings, together with Project Postings, constitute &ldquo;User Content.&rdquo; You are solely responsible for your User Content that you upload, publish, display, link to or otherwise make available (hereinafter, &ldquo;post&rdquo;) on the Service, and you agree that we are only acting as a passive conduit for your online distribution and publication of your User Content. You must be the owner of all the Intellectual Property Rights (as defined below) in the User Content you post, or have explicit permission from the owner(s) of all such rights to post the User Content on Earth Deeds.</p>
<p>For the purposes of this Agreement, &ldquo;Intellectual Property Rights&rdquo; means all patent rights, copyright rights, mask work rights, moral rights, rights of publicity, trademark, trade dress and service mark rights, goodwill, trade secret rights and other intellectual property rights as may now exist or hereafter come into existence, and all applications therefore and registrations, renewals and extensions thereof, under the laws of any state, country, territory or other jurisdiction.</p>
<p>You agree not to post User Content that: (i) may create a risk of harm, loss, physical or mental injury, emotional distress, death, disability, disfigurement, or physical or mental illness to you, to any other person, or to any animal; (ii) may create a risk of any other loss or damage to any person or property; (iii) may constitute or contribute to a crime or tort; (iv) contains any information or content that we deem to be unlawful, harmful, abusive, racially or ethnically offensive, defamatory, infringing, invasive of personal privacy or publicity rights, harassing, humiliating to other people (publicly or otherwise), libelous, threatening, or otherwise objectionable; (v) contains any information or content that is illegal; (vi) contains any information or content that you do not have a right to make available under any law or under contractual or fiduciary relationships; or (vii) contains any information or content that you know is not correct and current. You agree that any User Content that you post does not and will not violate third-party rights of any kind, including without limitation any Intellectual Property Rights, rights of publicity and privacy. Earth Deeds reserves the right, but is not obligated, to reject and/or remove any User Content that Earth Deeds believes, in its sole discretion, violates these provisions. You understand that publishing your User Content on the Service is not a substitute for registering it with the U.S. Copyright, the Writer&rsquo;s Guild of America, or any other rights organization.</p>
<p>Earth Deeds takes no responsibility and assumes no liability for any User Content that you or any other Users or third parties post or send over the Service. You understand and agree that any loss or damage of any kind that occurs as a result of the use of any User Content that you send, upload, download, stream, post, transmit, display, or otherwise make available or access through your use of the Service, is solely your responsibility. Earth Deeds is not responsible for any public display or misuse of your User Content. You understand and acknowledge that you may be exposed to User Content that is inaccurate, offensive, indecent, or objectionable, and you agree that Earth Deeds shall not be liable for any damages you allege to incur as a result of such User Content.</p>
<p>You are solely responsible for your interactions with other Earth Deeds Users. We reserve the right, but have no obligation, to monitor disputes between you and other Users.</p>
<p>&nbsp;</p>
<p>LICENSE GRANT</p>
<p>By posting any User Content on the Service, you expressly grant, and you represent and warrant that you have a right to grant, to Earth Deeds a royalty-free, sub-licensable, transferable, perpetual, irrevocable, non-exclusive, worldwide license to use, reproduce, modify, publish, list information regarding, edit, translate, distribute, publicly perform, publicly display, and make derivative works of all such User Content and your name, voice, and/or likeness as contained in your User Content, in whole or in part, and in any form, media or technology, whether now known or hereafter developed for use in connection with the Service.</p>
<p>Subject to the terms and conditions of this Agreement, you are hereby granted a non-exclusive, limited, personal license to use the Service. Earth Deeds reserves all rights not expressly granted herein in the Service and the Earth Deeds Content (as defined below). Earth Deeds may terminate this license at any time for any reason or no reason.</p>
<p>Assignment of Project-Related User Content</p>
<p>All User Content posted to a Project (&ldquo;Project Feedback&rdquo;) shall be the sole and exclusive property of the Content Creator that posted that Project. You hereby assign to the Content Creator, or its designee, all your right, title and interest throughout the world in and to any and all Project Feedback you post to that Content Creator&rsquo;s Project. You hereby waive and irrevocably quitclaim to the Content Creator or its designee and Earth Deeds any and all claims, of any nature whatsoever, that you now have or may hereafter have for infringement of any and all Project Feedback you post to that Content Creator&rsquo;s Project. If you post a Project, you acknowledge and agree that Earth Deeds cannot take responsibility for your use of Project Feedback and you use Project Feedback at your own risk. You hereby agree to indemnify, defend and hold Earth Deeds harmless from any liability arising from or relating to your use of Project Feedback.</p>
<p>USE OF WIDGETS</p>
<p>Earth Deeds may give you the opportunity to post a &ldquo;widget,&rdquo; or code that creates an Earth Deeds graphic and a link to the Site, on your personal blog, social network profile, or other locations on the Internet. You agree that your use of Earth Deeds widgets is subject to this Agreement, that you will not post any Earth Deeds widget on a web page containing content that is prohibited under the &ldquo;User Content&rdquo; section of this Agreement, and that you will remove all Earth Deeds widgets immediately upon termination of this Agreement.</p>
<p>OUR PROPRIETARY RIGHTS</p>
<p>Except for your User Content, the Service and all materials therein or transferred thereby, including, without limitation, software, images, text, graphics, illustrations, logos, patents, trademarks, service marks, copyrights, photographs, audio, videos, music, and User Content (the &rdquo; Earth Deeds Content&rdquo;), and all Intellectual Property Rights related thereto, are the exclusive property of Earth Deeds and its licensors. Except as explicitly provided herein, nothing in this Agreement shall be deemed to create a license in or under any such Intellectual Property Rights, and you agree not to sell, license, rent, modify, distribute, copy, reproduce, transmit, publicly display, publicly perform, publish, adapt, edit or create derivative works from any materials or content accessible on the Service. Use of the Earth Deeds Content or materials on the Service for any purpose not expressly permitted by this Agreement is strictly prohibited.</p>
<p>ELIGIBILITY</p>
<p>This Service is intended solely for Users who are thirteen (13) years of age or older, and any registration, use or access to the Service by anyone under 13 is unauthorized, unlicensed, and in violation of this Agreement. Earth Deeds may terminate your account, delete any content or information that you have posted on the Service, and/or prohibit you from using or accessing the Service (or any portion, aspect or feature of the Service) for any reason, at any time in its sole discretion, with or without notice, including without limitation if it believes that you are under 13. If you are under 18 years of age you may use the Service only if you either are an emancipated minor, or possess legal parental or guardian consent, and are fully able and competent to enter into the terms, conditions, obligations, affirmations, representations, and warranties set forth in this Agreement, and to abide by and comply with this Agreement.</p>
<p>PRIVACY</p>
<p>We care about the privacy of our Users. Click here [link to our privacy policy] to view our Privacy Policy. By using the Service, you are consenting to have your personal data transferred to and processed in the United States.</p>
<p>SECURITY</p>
<p>We have implemented commercially reasonable technical and organizational measures designed to secure your personal information from accidental loss and from unauthorized access, use, alteration or disclosure. However, we cannot guarantee that unauthorized third parties will never be able to defeat those measures or use your personal information for improper purposes. You acknowledge that you provide your personal information at your own risk.</p>
<p>DMCA NOTICE</p>
<p>If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible via the Service, please notify Earth Deeds&rsquo; copyright agent, as set forth in the Digital Millennium Copyright Act of 1998 (&ldquo;DMCA&rdquo;). For your complaint to be valid under the DMCA, you must provide the following information in writing:</p>
<p>1. An electronic or physical signature of a person authorized to act on behalf of the copyright owner;</p>
<p>2. Identification of the copyrighted work that you claim has been infringed;</p>
<p>3. Identification of the material that is claimed to be infringing and where it is located on the Service;</p>
<p>4. Information reasonably sufficient to permit Earth Deeds to contact you, such as your address, telephone number, and e-mail address;</p>
<p>5. A statement that you have a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or law; and</p>
<p>6. A statement, made under penalty of perjury, that the above information is accurate, and that you are the copyright owner or are authorized to act on behalf of the owner.</p>
<p>The above information must be submitted to the following DMCA Agent</p>
<p>UNDER FEDERAL LAW, IF YOU KNOWINGLY MISREPRESENT THAT ONLINE MATERIAL IS INFRINGING, YOU MAY BE SUBJECT TO CRIMINAL PROSECUTION FOR PERJURY AND CIVIL PENALTIES, INCLUDING MONETARY DAMAGES, COURT COSTS, AND ATTORNEYS&rsquo; FEES.</p>
<p>Please note that this procedure is exclusively for notifying Earth Deeds and its affiliates that your copyrighted material has been infringed. The preceding requirements are intended to comply with Earth Deeds&rsquo; rights and obligations under the DMCA, including 17 U.S.C. 512(c), but do not constitute legal advice. It may be advisable to contact an attorney regarding your rights and obligations under the DMCA and other applicable laws.</p>
<p>In accordance with the DMCA and other applicable law, Earth Deeds has adopted a policy of terminating, in appropriate circumstances and at Earth Deeds&rsquo; sole discretion, users who are deemed to be repeat infringers. Earth Deeds may also at its sole discretion limit access to the Service and/or terminate the accounts of any Users who infringe any intellectual property rights of others, whether or not there is any repeat infringement.</p>
<p>ADDITIONAL REPRESENTATIONS AND WARRANTIES</p>
<p>You shall be solely responsible for your own User Content and the consequences of posting or publishing it. In connection with User Content, you affirm, represent and warrant, in addition to the other representations and warranties in this Agreement, the following:</p>
<p>a. You are at least 18 years of age, and that if you are under 18 years of age you are either an emancipated minor, or possess legal parental or guardian consent, and are fully able and competent to enter into the terms, conditions, obligations, affirmations, representations, and warranties set forth in this Agreement, and to abide by and comply with this Agreement.</p>
<p>b. You have the written consent of each and every identifiable natural person in the User Content to use such person&rsquo;s name or likeness in the manner contemplated by the Service and this Agreement, and each such person has released you from any liability that may arise in relation to such use.</p>
<p>c. Your User Content and Earth Deeds&rsquo; use thereof as contemplated by this Agreement and the Service will not infringe any rights of any third party, including but not limited to any Intellectual Property Rights, privacy rights and rights of publicity.</p>
<p>THIRD-PARTY WEBSITES, ADVERTISERS OR SERVICES</p>
<p>Earth Deeds may contain links to third-party websites, advertisers, or services that are not owned or controlled by Earth Deeds. Earth Deeds has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party websites or services. If you access a third party website from Earth Deeds, you do so at your own risk, and you understand that this Agreement and Earth Deeds&rsquo; Privacy Policy do not apply to your use of such sites. You expressly relieve Earth Deeds from any and all liability arising from your use of any third-party website or services or third party owned content. Additionally, your dealings with or participation in promotions of advertisers found on Earth Deeds, including payment and delivery of goods, and any other terms (such as warranties) are solely between you and such advertisers. You agree that Earth Deeds shall not be responsible for any loss or damage of any sort relating to your dealings with such advertisers.</p>
<p>We encourage you to be aware of when you leave the Service, and to read the terms and conditions and privacy policy of any third-party website or service that you visit.</p>
<p>INDEMNITY</p>
<p>You agree to defend, indemnify and hold harmless Earth Deeds and its subsidiaries, agents, managers, and other affiliated companies, and their employees, contractors, agents, officers and directors, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney&rsquo;s fees) arising from: (i) your use of and access to the Service, including any data or work transmitted or received by you; (ii) your violation of any term of this Agreement, including without limitation, your breach of any of the representations and warranties above; (iii) your violation of any third-party right, including without limitation any right of privacy, publicity rights or Intellectual Property Rights; (iv) your violation of any law, rule or regulation of the United States or any other country; (v) any claim or damages that arise as a result of any of your User Content or any that are submitted via your account; or (vi) any other party&rsquo;s access and use of the Service with your unique username, password or other appropriate security code.</p>
<p>NO WARRANTY</p>
<p>THE SERVICE IS PROVIDED ON AN &ldquo;AS IS&rdquo; AND &ldquo;AS AVAILABLE&rdquo; BASIS. USE OF THE SERVICE IS AT YOUR OWN RISK. THE SERVICE IS PROVIDED WITHOUT WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT. WITHOUT LIMITING THE FOREGOING, EARTH DEEDS, ITS SUBSIDIARIES, AND ITS LICENSORS DO NOT WARRANT THAT THE CONTENT IS ACCURATE, RELIABLE OR CORRECT; THAT THE SERVICE WILL MEET YOUR REQUIREMENTS; THAT THE SERVICE WILL BE AVAILABLE AT ANY PARTICULAR TIME OR LOCATION, UNINTERRUPTED OR SECURE; THAT ANY DEFECTS OR ERRORS WILL BE CORRECTED; OR THAT THE SERVICE IS FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. ANY CONTENT DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE SERVICE IS DOWNLOADED AT YOUR OWN RISK AND YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM OR LOSS OF DATA THAT RESULTS FROM SUCH DOWNLOAD.</p>
<p>EARTH DEEDS DOES NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD PARTY THROUGH THE EARTH DEEDS SERVICE OR ANY HYPERLINKED WEBSITE OR SERVICE, OR FEATURED IN ANY BANNER OR OTHER ADVERTISING, AND EARTH DEEDS WILL NOT BE A PARTY TO OR IN ANY WAY MONITOR ANY TRANSACTION BETWEEN YOU AND THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES.</p>
<p>LIMITATION OF LIABILITY</p>
<p>TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, IN NO EVENT SHALL EARTH DEEDS, ITS AFFILIATES, DIRECTORS, EMPLOYEES OR ITS LICENSORS BE LIABLE FOR ANY DIRECT, INDIRECT, PUNITIVE, INCIDENTAL, SPECIAL, CONSEQUENTIAL OR EXEMPLARY DAMAGES, INCLUDING WITHOUT LIMITATION DAMAGES FOR LOSS OF PROFITS, GOODWILL, USE, DATA OR OTHER INTANGIBLE LOSSES, THAT RESULT FROM THE USE OF, OR INABILITY TO USE, THIS SERVICE. UNDER NO CIRCUMSTANCES WILL EARTH DEEDS BE RESPONSIBLE FOR ANY DAMAGE, LOSS OR INJURY RESULTING FROM HACKING, TAMPERING OR OTHER UNAUTHORIZED ACCESS OR USE OF THE SERVICE OR YOUR ACCOUNT OR THE INFORMATION CONTAINED THEREIN.</p>
<p>TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, EARTH DEEDS ASSUMES NO LIABILITY OR RESPONSIBILITY FOR ANY (I) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT; (II) PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM YOUR ACCESS TO AND USE OF OUR SERVICE; (III) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION STORED THEREIN; (IV) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE SERVICE; (V) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE THAT MAY BE TRANSMITTED TO OR THROUGH OUR SERVICE BY ANY THIRD PARTY; (VI) ANY ERRORS OR OMISSIONS IN ANY CONTENT OR FOR ANY LOSS OR DAMAGE INCURRED AS A RESULT OF THE USE OF ANY CONTENT POSTED, EMAILED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE THROUGH THE SERVICE; AND/OR (VII) USER CONTENT OR THE DEFAMATORY, OFFENSIVE, OR ILLEGAL CONDUCT OF ANY THIRD PARTY. IN NO EVENT SHALL EARTH DEEDS, ITS AFFILIATES, DIRECTORS, EMPLOYEES, OR LICENSORS BE LIABLE TO YOU FOR ANY CLAIMS, PROCEEDINGS, LIABILITIES, OBLIGATIONS, DAMAGES, LOSSES OR COSTS IN AN AMOUNT EXCEEDING THE AMOUNT YOU PAID TO EARTH DEEDS HEREUNDER.</p>
<p>THIS LIMITATION OF LIABILITY SECTION APPLIES WHETHER THE ALLEGED LIABILITY IS BASED ON CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY, OR ANY OTHER BASIS, EVEN IF EARTH DEEDS HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. THE FOREGOING LIMITATION OF LIABILITY SHALL APPLY TO THE FULLEST EXTENT PERMITTED BY LAW IN THE APPLICABLE JURISDICTION.</p>
<p>The Service is controlled and operated from its facilities in the United States. Earth Deeds makes no representations that the Service is appropriate or available for use in other locations. Those who access or use the Service from other jurisdictions do so at their own volition and are entirely responsible for compliance with local law, including but not limited to export and import regulations. Unless otherwise explicitly stated, all materials found on the Service are solely directed to individuals, companies, or other entities located in the U.S.</p>
<p>ASSIGNMENT</p>
<p>This Agreement, and any rights and licenses granted hereunder, may not be transferred or assigned by you, but may be assigned by Earth Deeds without restriction.</p>
<p>GENERAL</p>
<p>A. Governing Law. You agree that: (i) the Service shall be deemed solely based in Nevada; and (ii) the Service shall be deemed a passive one that does not give rise to personal jurisdiction over Earth Deeds, either specific or general, in jurisdictions other than Nevada. This Agreement shall be governed by the internal substantive laws of the State of Nevada, without respect to its conflict of laws principles. Any claim or dispute between you and Earth Deeds that arises in whole or in part from the Service shall be decided exclusively by a court of competent jurisdiction.</p>
<p>B. Notification Procedures. Earth Deeds may provide notifications, whether such notifications are required by law or are for marketing or other business related purposes, to you via email notice, written or hard copy notice, or through conspicuous posting of such notice on our website, as determined by Earth Deeds in our sole discretion. Earth Deeds reserves the right to determine the form and means of providing notifications to our Users, provided that you may opt out of certain means of notification as described in this Agreement.</p>
<p>C. Entire Agreement/Severability. This Agreement, together with any other legal notices and agreements published by Earth Deeds via the Service, shall constitute the entire agreement between you and Earth Deeds concerning the Service. If any provision of this Agreement is deemed invalid by a court of competent jurisdiction, the invalidity of such provision shall not affect the validity of the remaining provisions of this Agreement, which shall remain in full force and effect.</p>
<p>D. No waiver of any term of this Agreement shall be deemed a further or continuing waiver of such term or any other term, and Earth Deeds&rsquo; failure to assert any right or provision under this Agreement shall not constitute a waiver of such right or provision.</p>
      	      <div class="clear"></div>
        </div>
      </div>  
    </div> <!-- End of Content ---------------------------------------------------- -->
    <div class="shadow"></div>
    
<?php include('footer.php'); ?>
    
</div> <!-- End of Container ---------------------------------------------------- -->

</body>
</html>