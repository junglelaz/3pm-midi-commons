# 3PM MIDI Commons

[Try the live MIDI library](https://3pm.to/library/)

## Project focus

A creative-technology project connecting music ideation, a searchable browser experience and WordPress integration. The starter collection contains 100 base parts adapted across 24 keys/modes, with paired previews and MIDI downloads. AI-assisted composition and the release's validation boundaries are documented below.

## Downloads

| Package | Contents |
| --- | --- |
| [CC0 MIDI collection](./3pm-midi-commons-midi.zip) | 2,400 MIDI files ready to use in your DAW. |
| [WordPress plugin ZIP](./threepm-midi-commons-wordpress.zip) | Installable plugin, browser and starter MIDI collection. |
| [Original source ZIP](./3pm-midi-commons-source.zip) | Complete source, browser assets, catalogs, base patterns and rebuild tools. |

The PHP entry points and license files are also available directly in this repository.

An open library exploring how AI can support music ideation while leaving
musicians in charge of sound, performance, arrangement and expression.

## What's included

- 2,400 Standard MIDI Files: 24 major/natural minor keys, 100 loops per key.
- Ten instruments, five Original and five Companion parts per instrument/key.
- Five matching sets at 70, 82, 94, 106 and 120 BPM; all 4/4 and eight bars.
- A local browser with filters, single-part and paired synthesized previews.
- Individual downloads, the full MIDI collection and editable source tools.

The collection contains **100 base parts adapted across 24 keys/modes**,
not 2,400 independently composed musical ideas. Major versions transpose;
minor versions adapt scale degrees to natural minor.

## AI disclosure

The initial patterns and companion arrangements in this release were composed
with ChatGPT and exported and checked using Python. This is an illustration of
AI-assisted ideation, not a claim of human performance, exclusivity or clearance
against every existing composition. No audio recordings or third-party samples
are bundled. The earlier user-supplied Gemini Spanish guitar pattern is not
part of this collection. Previews are synthesized locally from exported notes.

The creative work is yours to develop: change a rhythm, remove notes, create a
new melody, pick instruments, record an interpretation and arrange your track.
Use the patterns as prompts for musical decisions rather than finished releases.

## Licenses

The MIDI patterns and base note data are dedicated under **CC0 1.0 Universal**,
to the extent any rights are held. Attribution is appreciated but not required;
commercial use is permitted under CC0. See CC0-1.0.txt and
https://creativecommons.org/publicdomain/zero/1.0/.

The website, WordPress integration and tools use the **MIT License**. Keep its
copyright and permission notice when redistributing the code. The 3PM name and
branding are not licensed as trademarks. No exclusive ownership or copyright
protection in generated material is promised; the licenses include disclaimers.

## Use in your music software

Choose a key and set. Preview a part, then use Pair to hear its matching
Original and Companion. Download MIDI and drag it onto a software-instrument
track. Set the project to the named tempo and choose your own instrument patch.
When starting at bar 1, the region ends at bar 9. Keep opening rests intact.

Match the key, mode and set when layering. Use separate tracks and choose a
few useful layers. The same-instrument bass companions fit the originals'
rests, but instrument release tails and different bass instruments can overlap.
Previews use approximate sounds; they do not reproduce DAW patches.

## WordPress installation

1. Upload and activate `threepm-midi-commons-wordpress.zip` in Plugins.
2. Add an Elementor Shortcode widget containing `[threepm_midi_library]`.
3. Publish your page at `/library/`.

The plugin registers one shortcode. It does not create pages, change other
content, phone home, collect analytics or require registration. The embedded
browser and downloads are served from the plugin's assets/library folder.
It can also be hosted as a standalone static directory for the starter collection.

## Public AI generator

The WordPress integration includes a generator and a public community catalog.
After activation, open Settings > 3PM MIDI Generator. It uses an existing
THREEPM_OPENAI_API_KEY or OPENAI_API_KEY server constant, OPENAI_API_KEY environment
variable, or an API key entered privately on that settings page. Saved keys are
encrypted with OpenSSL and the site's authentication salt. Changing the salt
requires re-entering the key. The key is never included in a browser response.

The initial model is gpt-4.1-mini, configurable to another Responses API model
supporting strict structured outputs. This uses the configured OpenAI API
project and its billing/credits, not an assumed balance in the browser or chat.
Generation starts disabled. No paid model request occurs until an administrator
adds a key and enables it. Configure a provider budget before opening it publicly.

Visitors choose one of 24 keys/modes, one of ten instruments, 70–120 BPM,
1–32 bars, a time signature and a musical direction. Supported meters are
2/4, 3/4, 4/4, 5/4, 7/4, 6/8, 7/8, 9/8 and 12/8. BPM counts quarter notes,
including in compound meters. They must consent to public CC0 release before generating.
Only schema-valid and musically checked results are published. Invalid outputs,
provider refusals and incomplete responses are rejected. Key membership, note
ranges, same-pitch overlap, velocities and requested loop boundaries are validated
independently on the server. Duplicate notes are merged, repeated pitches are
shortened to the next retrigger, and release tails are clipped at the loop edge.
Notes are not retuned to force a key. Validation checks file rules, not musical quality
or similarity to every existing composition.

Bar count and time signature are visible, sortable, filterable and searchable
for all starter and community files. Click a data-column heading again to reverse
the sort direction. The preview player sits above the filters and plays each loop
for its own bar count and meter.

Valid MIDI is saved in uploads/threepm-midi-commons/midi and indexed as a
Community MIDI Loop in WordPress. Its key, instrument, tempo and creation time
are public. The public index loads community entries alongside the starter
collection, with the same previews and individual downloads. The full starter
ZIP remains the fixed 2,400-file release; community additions are downloaded
individually. They have no claimed matching partner by default.

Anonymous access is allowed. Requests are restricted to the same website,
use short-lived signed tokens and have an atomic site-wide attempt cap (20 per
UTC day by default), a three-attempt daily visitor-address quota and a 60-second
cooldown. Failed attempts count too. These are request limits, not a guaranteed
money limit or complete bot defense. Shared networks/proxies may share quotas;
monitor usage and reduce the cap or disable generation when needed.

Prompts and choices are sent to OpenAI with API response storage disabled.
The plugin does not retain or publish prompts, names or email addresses. It
retains salted address hashes for rate limits for up to 24 hours. Provider-side
handling follows your OpenAI account terms. Generated notes and choices persist
publicly until an administrator trashes the entry under Community MIDI Loops.
Trashing removes it from search; the MIDI URL and already downloaded copies may
remain accessible. No generation-provider live call was made in development.

## Rebuild the MIDI files

The source download includes `tools/rebuild.py`, `tools/convert_patterns.py`,
`tools/verify_library.py` and `data/base-patterns.json`. Python 3.9+ is sufficient;
no extra packages are required. Run `python3 tools/rebuild.py OUTPUT_FOLDER`
from the source directory. It recreates and verifies all 2,400 MIDI files.

## Contribute

Share ideas, review musical phrasing, improve accessibility or contribute
patterns. Follow CONTRIBUTING.md. Use this repository’s issues and pull requests. The original source ZIP contains the full project layout.

## Verification and limits

All saved note events, tempo/key/time signatures, instrument programs,
eight-bar end markers and note-off pairs were checked. Original files were
preserved in the companion expansion. 240 paired bass combinations were
checked for nonoverlapping note times. Browser previews use the same notes.
The collection has not been auditioned across all instruments in your DAW.
