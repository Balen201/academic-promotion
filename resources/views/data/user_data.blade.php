@extends('admin.index')

@section('content')

<pre>{{ json_encode($completeUsersArray, JSON_PRETTY_PRINT) }}</pre>


<div class="mx-auto w-100 mb-6">
    <!-- admin/view_user.blade.php -->
    <h2 class="text-xl font-bold mb-4 text-center">User: {{ $user->name }}</h2>

    <div class="border border-gray-400 rounded-lg shadow-lg mb-6">
        <!-- Table 1 Submissions -->
        <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2">Table 1 Submissions</h3>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="border border-gray-400 px-4 py-2">Name</th>
                        <th class="border border-gray-400 px-4 py-2">College</th>
                        <th class="border border-gray-400 px-4 py-2">Department</th>
                        <th class="border border-gray-400 px-4 py-2">Number</th>
                        <th class="border border-gray-400 px-4 py-2">Address</th>
                        <th class="border border-gray-400 px-4 py-2">Play Zansti</th>
                        <th class="border border-gray-400 px-4 py-2">Play Dawakraw</th>
                        <th class="border border-gray-400 px-4 py-2">Barwar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->personal_detailfs as $submission)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ $submission->name }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $submission->college }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $submission->department }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $submission->number }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $submission->address }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $submission->play_zansti }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $submission->play_dawakraw }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $submission->barwar }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="border border-gray-400 rounded-lg shadow-lg">
        <!-- Table 2 Submissions -->
        <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2">Table 2 Submissions</h3>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="border border-gray-400 px-4 py-2">Pspori Gshti</th>
                        <th class="border border-gray-400 px-4 py-2">Pspori Wrd</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->personaldws as $submission)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ $submission->pspori_gshti }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $submission->pspori_wrd }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Repeat for other tables -->
</div>


<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <!-- Table 3 Submissions -->
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2">Table 3 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">La</th>
                    <th class="border border-gray-400 px-4 py-2">Takw</th>
                    <th class="border border-gray-400 px-4 py-2">Brwanama</th>
                    <th class="border border-gray-400 px-4 py-2">Pspor</th>
                    <th class="border border-gray-400 px-4 py-2">Zanko</th>
                    <th class="border border-gray-400 px-4 py-2">Wllat</th>
                    <th class="border border-gray-400 px-4 py-2">Farmani Zanko</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->xwendnones as $submission)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->la }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->takw }}</td>
                    <td class="border border-gray-400 px-4 py-2">
                        <div style="width: 200px; height: 200px;">
                            <img class="w-full h-full object-cover" src="{{ asset('/storage/brwanamayzero/' .$submission->brwanama) }}"
                                alt="Image">
                        </div>
                    </td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->pspor }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->zanko }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->wllat }}</td>
                    <td class="border border-gray-400 px-4 py-2">
                        <div style="width: 200px; height: 200px;">
                            <img class="w-full h-full object-cover" src="{{ asset('/storage/farmanizanko/' .$submission->farmani_zanko) }}"
                                alt="Image">
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <!-- Table 4 Submissions -->
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 4 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Brwanama</th>
                    <th class="border border-gray-400 px-4 py-2">Nawnishani Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->xwendndws as $submission)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">
                        <img class="w-48 h-48 object-cover" src="{{ asset('/storage/brwanamayyak/' .$submission->brwanama) }}"
                            alt="Image">
                    </td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->nawnishani_nama }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<!-- Table 5 Submissions -->
<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 5 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">La</th>
                    <th class="border border-gray-400 px-4 py-2">Takw</th>
                    <th class="border border-gray-400 px-4 py-2">Pisha</th>
                    <th class="border border-gray-400 px-4 py-2">Shweni Kar</th>
                    <th class="border border-gray-400 px-4 py-2">Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->xwendnses as $submission)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->la }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->takw }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->pisha }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->shweni_kar }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->address }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Table 6 Submissions -->
<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 6 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Play Zansti</th>
                    <th class="border border-gray-400 px-4 py-2">Barwari Wargrtn</th>
                    <th class="border border-gray-400 px-4 py-2">Layani Plapedar</th>
                    <th class="border border-gray-400 px-4 py-2">Farmani Zanko</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->xwendnchars as $submission)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->play_zansti }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->barwari_wargrtn }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->layani_plapedar }}</td>
                    <td class="border border-gray-400 px-4 py-2">
                        <img class="w-48 h-48 object-cover" src="{{ asset('/storage/farmanizanko/' .$submission->farmani_zanko) }}"
                            alt="Image">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Table 7 Submissions -->
<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 7 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Title Twezhinawa</th>
                    <th class="border border-gray-400 px-4 py-2">Shweni Bllawkrdnawa</th>
                    <th class="border border-gray-400 px-4 py-2">Kati Bllawkrdnawa</th>
                    <th class="border border-gray-400 px-4 py-2">Play Zanstibo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->twezhinawayaks as $submission)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->title_twezhinawa }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->shweni_bllawkrdnawa }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->kati_bllawkrdnawa }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->play_zanstibo }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



<!-- Table 8 Submissions -->
<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 8 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Title Twezhinawa</th>
                    <th class="border border-gray-400 px-4 py-2">Shwen</th>
                    <th class="border border-gray-400 px-4 py-2">Kati Bllawkrdnawa</th>
                    <th class="border border-gray-400 px-4 py-2">Facter</th>
                    <th class="border border-gray-400 px-4 py-2">Index Internet</th>
                    <th class="border border-gray-400 px-4 py-2">Wargirawa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->twezhinawadws as $submission)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->title_twezhinawa }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->shwen }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->kati_bllawkrdnawa }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->facter }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->index_internet }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->wargirawa }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Table 9 Submissions -->
<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 9 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Sall</th>
                    <th class="border border-gray-400 px-4 py-2">Hagbay Mamosta</th>
                    <th class="border border-gray-400 px-4 py-2">Zanstxwazi Bardawam</th>
                    <th class="border border-gray-400 px-4 py-2">Facter</th>
                    <th class="border border-gray-400 px-4 py-2">Daranjamgshti</th>
                    <th class="border border-gray-400 px-4 py-2">Feedback Qutabi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->dllnyajors as $submission)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->sall }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->hagbay_mamosta }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->zanstxwazi_bardawam }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->facter }}</td>
                    <td class="border border-gray-400 px-4 py-2">
                        <div><img width="200px" src="{{ asset('/storage/daranjamgshti/' .$submission->daranjami_gshti) }}" alt="Image"></div>
                    </td>
                    <td class="border border-gray-400 px-4 py-2">
                        <div><img width="200px" src="{{ asset('/storage/feedbackqutabi/' .$submission->feedback_qutabi) }}" alt="Image"></div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Table 10 Submissions -->
<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 10 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Layani Supasdar</th>
                    <th class="border border-gray-400 px-4 py-2">Zhmara</th>
                    <th class="border border-gray-400 px-4 py-2">Barwari Farman</th>
                    <th class="border border-gray-400 px-4 py-2">Hoysupas Pezanin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->rezlenans as $submission)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->layani_supasdar }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->zhmara }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->barwari_farman }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->hoysupas_pezanin }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Table 11 Submissions -->
<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 11 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Nawnishani Kteb</th>
                    <th class="border border-gray-400 px-4 py-2">Shweni Bllawkrdnawa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->blawkrawas as $submission)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->nawnishani_kteb }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->shweni_bllawkrdnawa }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Table 12 Submissions -->
<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 12 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Lizhnay Post</th>
                    <th class="border border-gray-400 px-4 py-2">Zhmara</th>
                    <th class="border border-gray-400 px-4 py-2">Barwar</th>
                    <th class="border border-gray-400 px-4 py-2">Maway Lizhna</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->chalakiyaks as $submission)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->lizhnay_post }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->zhmara }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->barwar }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->maway_lizhna }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<!-- Table 13 Submissions -->
<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 13 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-400 px-4 py-2 text-center">brwanama</th>
                    <th class="border border-gray-400 px-4 py-2 text-center">Nawi Qutabi</th>
                    <th class="border border-gray-400 px-4 py-2 text-center">Zhmara</th>
                    <th class="border border-gray-400 px-4 py-2 text-center">Barwar</th>
                    <th class="border border-gray-400 px-4 py-2 text-center">Barwari Darchun</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->chalakidws as $submission)
                <tr class="border-b border-gray-400">
                    <td class="border border-gray-400 px-4 py-2 text-center"><img class="mx-auto" width="200px" src="{{ asset('/storage/brwanama/' .$submission->brwanama) }}" alt="Image"></td>
                    <td class="border border-gray-400 px-4 py-2 text-center">{{ $submission->nawi_qutabi }}</td>
                    <td class="border border-gray-400 px-4 py-2 text-center">{{ $submission->zhmara }}</td>
                    <td class="border border-gray-400 px-4 py-2 text-center">{{ $submission->barwar }}</td>
                    <td class="border border-gray-400 px-4 py-2 text-center">{{ $submission->barwari_darchun }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Table 14 Submissions -->
<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 14 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-400 px-4 py-2 text-center">Nawi Confrance</th>
                    <th class="border border-gray-400 px-4 py-2 text-center">Shwen</th>
                    <th class="border border-gray-400 px-4 py-2 text-center">Kati Bastni</th>
                    <th class="border border-gray-400 px-4 py-2 text-center">Zhmara</th>
                    <th class="border border-gray-400 px-4 py-2 text-center">Barwar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->chalakises as $submission)
                <tr class="border-b border-gray-400">
                    <td class="border border-gray-400 px-4 py-2 text-center">{{ $submission->nawi_confrance }}</td>
                    <td class="border border-gray-400 px-4 py-2 text-center">{{ $submission->shwen }}</td>
                    <td class="border border-gray-400 px-4 py-2 text-center">{{ $submission->kati_bastni }}</td>
                    <td class="border border-gray-400 px-4 py-2 text-center">{{ $submission->zhmara }}</td>
                    <td class="border border-gray-400 px-4 py-2 text-center">{{ $submission->barwar }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Table 15 Submissions -->
<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 15 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-400 px-4 py-2 text-center">Sandica</th>
                    <th class="border border-gray-400 px-4 py-2 text-center">Zhmaray Nasnama</th>
                    <th class="border border-gray-400 px-4 py-2 text-center">Barwari Andam</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user->andams as $submission)
                <tr class="border-b border-gray-400">
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->sandica }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->zhmaray_nasnama }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $submission->barwari_andam }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Table 16 Submissions -->
<div class="border border-gray-400 rounded-lg shadow-lg mb-6">
    <h3 class="text-lg font-bold mb-2 text-red-700 bg-gray-200 py-2 text-center">Table 16 Submissions</h3>
    <div class="overflow-x-auto">
        <table class="w-full">

            <tbody>
                @foreach ($user->feedbacks as $submission)
                <tr class="border-b border-gray-400">
                    <td class="border border-gray-400 px-4 py-2">
                        <textarea class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" rows="4" readonly>{{ $submission->comment }}</textarea>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<table class="w-full">
    <thead>
        <tr class="bg-gray-200">
            <th class="border border-gray-400 px-4 py-2 text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr class="border-b border-gray-400">
            <td class="border border-gray-400 px-4 py-2">
                <form method="post" action="{{ route('toggleStatus', $user->id) }}" class="flex items-center justify-center">
                    @csrf
                    @method('POST')

                    @if($user->status == '')
                        <button type="submit" formaction="{{ route('acceptStatus', $user->id) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-4">Accept</button>
                        <button type="submit" formaction="{{ route('rejectStatus', $user->id) }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Reject</button>
                    @elseif($user->status == 'accepted')
                        <button disabled class="bg-green-500 text-white font-bold py-2 px-4 rounded opacity-50 cursor-not-allowed mr-4">Accept</button>
                        <button type="submit" formaction="{{ route('rejectStatus', $user->id) }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Reject</button>
                    @else
                        <button type="submit" formaction="{{ route('acceptStatus', $user->id) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-4">Accept</button>
                        <button disabled class="bg-red-500 text-white font-bold py-2 px-4 rounded opacity-50 cursor-not-allowed">Reject</button>
                    @endif
                </form>
            </td>
        </tr>
    </tbody>
</table>



@endsection
