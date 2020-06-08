<?php

namespace Tests\Todo\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PrivateMessageController
 */
class PrivateMessageControllerTest extends TestCase
{
    /**
     * @test
     */
    public function delete_private_message_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $private_message = factory(\App\Models\PrivateMessage::class)->create();
        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->post(route('delete-pm', ['id' => $private_message->id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withSuccess('PM Was Deleted Successfully!'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function get_private_message_by_id_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $private_message = factory(\App\Models\PrivateMessage::class)->create();
        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('message', ['id' => $private_message->id]));

        $response->assertOk();
        $response->assertViewIs('pm.message');
        $response->assertViewHas('pm');
        $response->assertViewHas('user');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function get_private_messages_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('inbox'));

        $response->assertOk();
        $response->assertViewIs('pm.inbox');
        $response->assertViewHas('pms');
        $response->assertViewHas('user');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function get_private_messages_sent_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('outbox'));

        $response->assertOk();
        $response->assertViewIs('pm.outbox');
        $response->assertViewHas('pms');
        $response->assertViewHas('user');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function make_private_message_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('create'));

        $response->assertOk();
        $response->assertViewIs('pm.send');
        $response->assertViewHas('user');
        $response->assertViewHas('receiver_id');
        $response->assertViewHas('username');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function mark_all_as_read_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->get(route('mark-all-read'));

        $response->assertRedirect(withSuccess('Your Messages Have All Been Marked As Read!'));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function reply_private_message_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $private_message = factory(\App\Models\PrivateMessage::class)->create();
        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->post(route('reply-pm', ['id' => $private_message->id]), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($v->errors()));

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function search_p_m_inbox_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->post(route('searchPMInbox'), [
            // TODO: send request data
        ]);

        $response->assertOk();
        $response->assertViewIs('pm.inbox');
        $response->assertViewHas('pms');
        $response->assertViewHas('user');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function search_p_m_outbox_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->post(route('searchPMOutbox'), [
            // TODO: send request data
        ]);

        $response->assertOk();
        $response->assertViewIs('pm.outbox');
        $response->assertViewHas('pms');
        $response->assertViewHas('user');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function send_private_message_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $user = factory(\App\Models\User::class)->create();

        $response = $this->actingAs($user)->post(route('send-pm'), [
            // TODO: send request data
        ]);

        $response->assertRedirect(withErrors($v->errors()));

        // TODO: perform additional assertions
    }

    // test cases...
}
