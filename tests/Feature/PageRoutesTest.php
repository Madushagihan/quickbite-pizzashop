<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageRoutesTest extends TestCase
{
    /**
     * Test the home page renders successfully.
     */
    public function test_home_page_is_accessible(): void
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('QuickBite');
        $response->assertSee('CRAVING FOR');
    }

    /**
     * Test the menu catalog page renders successfully.
     */
    public function test_menu_page_is_accessible(): void
    {
        $response = $this->get(route('menu'));

        $response->assertStatus(200);
        $response->assertSee('FULL GOURMET MENU');
        $response->assertSee('Classic Beef Burger');
    }

    /**
     * Test the about us page renders successfully.
     */
    public function test_about_page_is_accessible(): void
    {
        $response = $this->get(route('about'));

        $response->assertStatus(200);
        $response->assertSee('Behind The Flavors');
        $response->assertSee('MEET OUR CHEFS');
    }

    /**
     * Test the contact inquiries page renders successfully.
     */
    public function test_contact_page_is_accessible(): void
    {
        $response = $this->get(route('contact'));

        $response->assertStatus(200);
        $response->assertSee('CONTACT QUICKBITE');
        $response->assertSee('SEND US A MESSAGE');
    }

    /**
     * Test contact form submission with valid data.
     */
    public function test_contact_form_submits_successfully(): void
    {
        $response = $this->post(route('contact.submit'), [
            'name' => 'Masud Perera',
            'email' => 'masud@example.com',
            'phone' => '0771234567',
            'subject' => 'General Inquiry',
            'message' => 'I would like to inquire about party catering packages.',
        ]);

        $response->assertSessionHas('status');
        $response->assertRedirect();
    }

    /**
     * Test contact form validation requires required fields.
     */
    public function test_contact_form_validation(): void
    {
        $response = $this->post(route('contact.submit'), [
            'name' => '',
            'email' => 'invalid-email',
            'message' => '',
        ]);

        $response->assertSessionHasErrors(['name', 'email', 'subject', 'message']);
    }
}
