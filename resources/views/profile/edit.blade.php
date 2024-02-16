<x-app-layout>
    <div class="edit-profile">
        <section class="info-profile">
            @include('profile.partials.update-profile-information-form')
        </section>
        <section class="update-password">
            @include('profile.partials.update-password-form')
        </section>
        <section class="delete-user">
            @include('profile.partials.delete-user-form')
        </section>
    </div>
</x-app-layout>
