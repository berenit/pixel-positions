<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="€ 100.000"/>
        <x-forms.input label="Location" name="location" placeholder="L'Aquila, Italy"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://www.myite.exp/jobs/ceo"/>
        <x-forms.checkbox label="Feature" name="features"/>

        <x-forms.divider/>

        <x-forms.input label="Tags (comme separated)" name="tags" placeholder="laracast, video, education"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
