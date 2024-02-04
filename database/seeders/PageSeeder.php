<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'id' => 1 ,
                'title' => 'About Us',
                'content' => "<h1>Lorem Ipsum</h1><p><strong><br>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><strong><br>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p>",
            ],[
                'id' => 3,
                'title' => 'Terms & Conditions',
                'content' => "<p>&nbsp;<br><strong>1. Acceptance of Terms</strong><br>By accessing or using this website, you agree to be bound by these Terms &amp; Conditions. If you do not agree with any part of these terms, you may not use our services.</p><p><br><strong>2. Changes to Terms</strong><br>We reserve the right to update, change, or replace any part of these Terms &amp; Conditions at our discretion. It is your responsibility to check this page periodically for changes. Your continued use of the website following the posting of any changes constitutes acceptance of those changes.</p><p><br><strong>3. User Responsibilities</strong><br>You agree to use this website only for lawful purposes and in a way that does not infringe on the rights of, restrict, or inhibit anyone else's use and enjoyment of the site. Prohibited behavior includes harassing or causing distress to other users, transmitting obscene or offensive content, and attempting to gain unauthorized access to our systems.</p><p><br><strong>4. Intellectual Property</strong><br>All content on this website, including but not limited to text, graphics, logos, images, and software, is the property of the website owner and is protected by international copyright laws. You may not reproduce, distribute, display, or transmit any of the content on this website without our prior written permission.</p><p><br><strong>5. Privacy Policy</strong><br>Your use of this website is also governed by our Privacy Policy. Please review our Privacy Policy to understand our practices.</p><p><br><strong>6. Limitation of Liability</strong><br>We shall not be liable for any direct, indirect, incidental, consequential, or punitive damages arising out of your access to, use of, or inability to use this website. This includes damages for lost profits, business interruption, or loss of data.</p><p><br><strong>7. Governing Law</strong><br>These Terms &amp; Conditions are governed by and construed in accordance with the laws of [Jurisdiction]. Any disputes relating to these terms shall be subject to the exclusive jurisdiction of the courts in [Jurisdiction].</p><p><br><strong>8. Contact Information</strong><br>If you have any questions about these Terms &amp; Conditions, please contact us at [contact@email.com].<br>By using this website, you acknowledge that you have read, understood, and agree to be bound by these Terms &amp; Conditions.&nbsp;</p><p><br></p>",
            ],[
                'id' => 4,
                'title' => 'Privacy Policy',
                'content' => "<p>This Privacy Policy outlines how [Your Company Name] collects, uses, discloses, and protects your personal information when you use our website or engage with our products and services. We are committed to ensuring the privacy and security of your information.</p><p><strong>1. Information We Collect</strong></p><p>We may collect the following types of information:</p><ul><li><strong>Personal Information:</strong> This includes but is not limited to your name, email address, contact details, and any other information you provide when filling out forms on our website or interacting with our services.</li><li><strong>Log Data:</strong> When you visit our website, our servers automatically log standard information, including your IP address, browser type, access times, and referring website addresses.</li><li><strong>Cookies:</strong> We may use cookies to enhance your user experience. You can choose to disable cookies through your browser settings, but this may affect the functionality of our website.</li></ul><p><strong>2. How We Use Your Information</strong></p><p>We may use your information for the following purposes:</p><ul><li>To provide and maintain our services.</li><li>To communicate with you regarding your inquiries, purchases, or account information.</li><li>To improve our website and services.</li><li>To send promotional or informational content if you have opted in to receive such communications.</li></ul><p><strong>3. How We Protect Your Information</strong></p><p>We prioritize the security of your personal information and employ appropriate measures to safeguard it. However, no method of transmission over the Internet or electronic storage is completely secure, and we cannot guarantee absolute security.</p><p><strong>4. Disclosure of Information</strong></p><p>We may disclose your personal information to third parties in the following circumstances:</p><ul><li>With your consent.</li><li>When required by law or to comply with legal processes.</li><li>To protect our rights, privacy, safety, or property, and that of our users and the public.</li></ul><p><strong>5. Third-Party Links</strong></p><p>Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these sites. We encourage you to review the privacy policies of any third-party websites you visit.</p><p><strong>6. Changes to This Privacy Policy</strong></p><p>We reserve the right to update or change our Privacy Policy at any time. Any changes will be effective immediately upon posting on this page. Your continued use of our website and services after any modifications constitutes acceptance of those changes.</p><p><strong>7. Contact Us</strong></p><p>If you have any questions or concerns about our Privacy Policy, please contact us at [contact@email.com].</p><p>By using our website and services, you acknowledge that you have read and understood this Privacy Policy and agree to the collection and use of your information as described herein.</p>",
            ]

        ];

        foreach ($data as $key => $value) {
            $addPage = new Page();
            $addPage->id = $value["id"];
            $addPage->title = $value['title'];
            $addPage->content = $value['content'];
            $addPage->save();
        }
    }
}
