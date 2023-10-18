<form method="POST" action="{{ route('reply.store', ['claim_id' => $claim->id]) }}">
    @csrf

    <!-- Add other response fields here -->

    <button type="submit">Submit Response</button>
</form>
