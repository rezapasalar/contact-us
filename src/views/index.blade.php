<div class="table-responsive">
    <h4>
        Contacts
        <a href="/contact" class="btn btn-primary">Contact</a>
    </h4>

    <table class="table table-hover table-striped">
        <thead class="bg-primary text-light">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Body</th>
                <th>Created At</th>
            </tr>
        </thead>

        <tbody>
            @forelse($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->body }}</td>
                    <td>{{ $contact->created_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="bg-white text-center">There is no data in the database</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>