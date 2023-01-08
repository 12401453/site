<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>let page_id = 3;</script>
<?php
$path = $_SERVER["DOCUMENT_ROOT"];
$path = $path."/site";
include $path."/links.php";
include $path."/style_etc/style_search.php";
?>
</head>
<style>
#para1 {
  font-family: Calibri;
  margin: 8px;
}
p2 {
  font-family: Bukyvede;
}

</style>
<body>
<div id="para1">
<br>

<b>Loanword origin code:</b><br>
1=Germanic, 2=Greek, 3=Latin, 5=Hebrew/Aramaic/general Bible-area Semitic, 7=Turkic, 8=Finno-Ugric, 9=Mongolian, 12 = Greek via Germanic, 25 Hebrew via Greek, 10=Slavic via Germanic etc.
<br><br>
<b>CS annotation decisions:</b>
<br><br>
<a href="https://github.com/12401453/Autoreconstructor">Autoreconstructor code</a>
<br><br>
-- PV2 and PV3 haven't happened, but the morphological changes are reflected, with original hard-endings in the "original morphology" column, i.e. оtьkemь-otьkomь-otьcemь
<br><br>
-- all inherited /a-/ is left so one can search for the extent of the j- prothesis (including /ako/ not /jǞko/). Where ⱑ denotes etymological long /e/ it is of course kept as jǞ (ⱑⱄⱅⰻ etc.), and levelling based on prefixed verb forms is needed to account for /e-/ reflexes of this in the modern languages (есть, jechać etc.). For many lexemes it is difficult to tell whether we should reconstruct CS *a or *jǞ; in these cases ESSJa and Derksen 2008 have been consulted and justification for the decision noted in column M.
<br><br>
-- tense jers are written as jers not archiphonemes.
<br><br>
-- if morphological change or levelling has occured, the sounds of the levelled words are pushed back to CS and written, with the CS form of the original desinence in the "original morphology" column: ⰳ҃ⰾⱑⱅⰵ -glagoĺěte - glagoĺite. This is toggleable when viewing CS versions of texts.
<br><br>
-- OCS /-zdr-/ is assumed to be originally /-zr-/, and is considered the regular reflex of CS /zr/. This is definitely incorrect, given the symmetry with /str/ (острый etc.) < *sr, but it makes searching simpler because most  /-zdr/ occurs at preposition or prefix boundaries, and the modern languages have mostly re-established /zr/ in these cases.
<br><br>
-- abbreviation чкъ is assumed to be /čьl-/, with /čel-/ put in the "doublet/alternative form" column (G).
<br><br>
-- Following the ESSJa and Derksen 2008 *jь- is used for all inherited word-initial *i- (except pronouns имъ, ихъ etc, where we use /ji-/, cf. Cz jim, jich), but this means that OCS вънити is still /vъniti/ because 1. here the vowel comes from *ei-, and 2. it never went /i/>/jь/ because the /n/ of the preposition was always in the way. Thus прити < /prijьti/ but  вънити < /vъniti/. (Cf. Pol. wejść < vъjьsti (/ść/ is from analogy with wieść) which has obviously been reformed after loss of /n/, compared to archaic wniść). Exceptions for /i/='and', /ili/ 'or', /ibo/. Foreign i- are all left except for jisusъ.
<br><br>
-- long-form adjectivals are marked as follows: '1': normal adjectives where the short form endings don't contain consonants; '2': normal adjectives where the short form endings do contain consonants; '3': PRAPs and PAPs where the short form endings don't contain consonants; '4': PRAPs and PAPs where the short form endings do contain consonants
<br><br>
-- The imperatives of verbs whose infinitives end in /-yti/, /-iti/ (myti, piti) are presumed to have zero-grade /ъ,ь/ as the root vowel in the imperative (and present tense), which are assumed to be /mъji[te]/, /pьji[te]/ (like *umьri from *umerti).
<br><br>
-- žęti apparently has a -j- throughout its pres. tense conjugation, incl. žьńǫ, žьńǫtъ
<br><br>
-- іжь is assumed the same as іже, /jьže/ (with <ь> used for /e/ as in <дьнь> /den/), but they may be doublets žь ~ že (this is almost certainly wrong)
<br><br>
-- тогда is assumed to be from tъgъda based on the 139 тъгда vs 5 тогда in Supr. where strong /ъ/ --> /ъ/. That тогда is overwhelming in Zogr. is expected if we assume all strong ъ > /o/, as here the originality of the jer would be very much more obscured if we take the leap of faith of assuming that the jer in -gъd- would've been lost early even in Urksl. We also have Cz. and Pol. tedy, wtedy, not **tody.
<br><br>
-- the zero-grade ablaut forms of verbs in -lěkti (elkti) are -ĺ̥- (despite dict. p. 696 giving pres. тлъкѫ, тлъчеши; these are CS *tĺ̥kǫ, *tĺ̥češi, inf. *telћi
<br><br>
--What Diels 1963 calls "adjectives in -ij-", божии, велии etc. I have as "adjectives in -ьj-": božьjь, velьjь. Божий is clearly from bog + the possessive suffix *-j- > božь, and then I think the def. article -jь which has now been eaten by the stem.
<br><br>
--Negated pres. forms of the verb 'to be' ⱀⱑⱄⱅⱏ, ⱀⱑⱄⰿⱐ etc. are CS *něstъ, *něsmь because the contraction must have happened 1. before e- took prothetic /j/, and 2. when /e/ and /ě/ were still just long and short versions of each other, meaning 2X short /e/ = long /e/ (>ě).
<br><br>
--Where OCS has secondary imperfectives on TORT stems (възбранити ~ възбраняти) we can't tell whether the latter is a morphologically extended lengthened o-grade ablaut, because both would give SSl. -bran-. In fact, even in Polish where we have zabronić ~ zabraniać the -bran- in the imperfective must be later than the metathesis, because long TORT-groups never become TRAT in Polish (cf. Ru. оборонить ~ оборонять, where the TOROT-group has made extension of the o:a morphological opposition impossible [though obviously some Russian words have tried, i.e. оборачивать]). I thus presume no morphologically-conditioned /a/-vocalisms for the CS predecessors of the OCS forms and write all as TORT, i.e. vъzborńǞti.
<br><br>
--Assimilatory jotation (въжлюблениі, съблажнаетъ etc.) is assumed to be original and the corresponding forms written in column E if levelling has taken place (e.g. съблазн҄ѣетъ, column D: sъblazńǞjetъ, column E: sъblažńǞjetъ). The forms before jotation and loss of /j/ will be included in column L, e.g. оумръштвенъ = column D: umŕ̥ћvĺenъ, column L: umŕ̥tvjenъ. (i.e Diels 1963:135).
<br><br>
--The reflexes of /tj, dj/ are given as unitary /ћ, ђ/. Reflexes of /stj, zdj/ are given as /šћ, žђ/ respectively, even though they develop in all of Slavic identically to /sk+j+FV, zg+j+FV/. The latter are given as /šč, žǯ/ to to distinguish them as having emerged (most probably) contemporaneous with PV1 and thus before the emergence of /ћ, ђ/. The pre-PV1 versions of /sk+j+FV, zg+j+FV/ are not given in column L, and nor are /zj, sj/ (mostly because unless one has good IE cognates like Go. siujan, it is difficult to distinguish between the reflexes of these groups and PV1'd /g, x/, and anyway their reflexes in Common Slavic were everywhere identical to the former). Reflexes of /kt+FV, gt+FV/ are given as /ћ/, with their predecessors in column L.
<br><br>
--Aorists are dealt with as follows: only primary sigmatic and root-aorists are considered originally CS, but given that root-aorists are only attested in stems ending on stops, /s/ or /z/ (Diels p.238) (i.e. not nasals or liquids, e.g. 3rd pl. **načьnǫ, or 3rd sgl. **umere), we do not give root-aorists as possible alternatives for sonorant-stemmed primary S-aorists. In the case of ⰲⱑⱄⱔ, ⱃⱑⱈⱏ, the corresponding root-aorists *vedǫ, *rekъ are given as possible alternatives, even if they aren't attested, because there are attested forms with stems ending on the same consonant groups. S-aorists whose stems do not end on /r/ or /k/, e.g. ⱗⱅⰻ are only regular if they have 1sg. ⱗⱄⱏ, 1st. pl. ⱗⱄⱁⰿⱏ, 3rd pl. ⱗⱄⱔ etc.; the -s- forms are given as originals in column E in the case of forms like ⱗⱎⱔ with unetymological /š/. I follow Diels 1963 (258-9) in considering only those verbs of class 2 whose stems end on consonants to regularly have had the simple aorist (ⱆⱅⱁⱂⱘ etc.), and will stick to this rule even with ⰽⱁⱄⱀⱘⱅⰻ which Diels says always shows the "extended S-aorist" ⰽⱁⱄⱀⱘⱎⱔ etc. The S-aorist on non-class IV verbs with vocalic stems is not etymological from the point of view of the time of the action of the ruki-rule (as we would expect /s/ to have remained unchanged throughout all the aorist forms), but it had clearly been full regularised by CS times, so these aorists are accepted. In order to explain ⱆⰿⱃⱑ, ⱆⰿⱃⱑⱅⱏ (which we can't consider to have been original root-aorists <*mere, levelled on the newly metathesised infinitive stem /mrě-/ < *merti, because of what was said above about root-aorists never appearing on sonorant-stemmed verbs, and because such a late analogical levelling would surely have left traces e.g. *ⱆⰿⰵⱃⰵ in the oldest documents) we have to do as Olander (2015: 318, 330 and throughout) implicitly does and accept the CS form *umer (from S-aorist *umer-s) as regular, and state the traditional TORT rule as affecting syllable-final, rather than pre-consonantal, liquids.
<br>3rd sg. aorists which have been extended by -tъ (ⱀⰰⱍⱔⱅⱏ, ⱆⰿⱃⱑⱅⱏ etc.) are considered secondary, and the aorists ⰱⱏⰹⱄⱅⱏ, ⰴⰰⱄⱅⱏ, and ⱑⱄⱅⱏ are considered to have been extended from ⰱⱏⰹ, ⰴⰰ, and ⱑ based on the /-stъ/ of the corresponding 3rd sgl. present forms. The latter assumption finds strong justification in the fact that the corresponding Old Rus'ian forms have <-сть> (Olander 2015:331-4, see there for discussion).

<br><br>
--The verbs ⱁⱅⰲⱃⱑⱄⱅⰻ and ⱁⱅⰲⱃⱐⰸⰰⱅⰻ (to open) have no back jer between the preposition and the -vŕ̥z- root, (dictionary p.423) (the combination /tv/ is never disallowed, so strictly speaking words like отъвⱑштати must be secondarily [re]formed after the /ot-/ becomes identified with the preposition /otъ/. It's possible that just all the occurences of these verbs have omitted the jer (in accordance with their jer-less phonological systems), but I will follow the dictionary in assuming /otv-/ as original for "to open", and /otъ-v-/ for ⱁⱅⱏⰲⱃⱑⱎⱅⰻ, ⱁⱅⱏⰲⱃⱐⰳⱘ and ⱁⱅⱏⰲⱑⱎⱅⰰⱅⰻ etc.)
<br><br>
--The masc. i-stem instrumental singual, and dative + locative plurals, in Diels 1963 (p.152) and Whitfield Reader (p.199) are taken as alternating between -емь -емъ, -ехъ and -ьмь, -ьмъ, -ьхъ respectively. The etymologically regular endings are clearly the jer-variants (the clue is in the name i-stem, where 'i' > /ь/), but Olander 2015 p.161 cites van Wijk 1931:175 (unavailable to me) to claim that the Isg. -emь ending "at least partly represents the jo-stem ending", and says equivalent things for the Dpl. (p.273) and Lpl. (p.289-90). Given that there are no examples of relevant words in the Kiev Folia (excepting gospodьmь which is always contracted to ⰳ҃ⰿⱐ) where the jers are preserved, and that in all other canonical OCS documents there are very strong indications that vocalisation of strong front-jers to /e/ has occured, it's impossible to prove that desinences with -e- represent borrowed jo-stem endings and not just vocalised i-stem endings. Moreover, Old Russian handbooks, based on texts whose speakers had preserved the jers in their CS state, list only поутьмь, поутьхь etc. I therefore will take all such forms, whether they are spelt with <е> or <ь>, to descend from forms with /ь/, but I will list CS forms with /e/ as doublets in column G until I have been able to evaluate the strength of van Wijk's arguments.
<br><br>
--Foreign names which begin in Greek with i+vowel are given as CS ij-, even though they can occur in OCS either with or without an initial и- (ꙇѣковъ~ѣковъ, юда etc.). The native OCS phonological system would certainly have precluded the pronunciation of this initial /ij-/ (it definitely would've been /ja-, ju-/ [or /ě-, ü-/ etc. in Urksl.]), but a clear willingness to imitate the Greek initial /i-/ among the scribes is shown by spellings like <июдеѩ·>.
<br><br>
--The preposition ⰺⰸ has no back-jer on the end, because it was always clitically attached to the following word, and consonant clusters beginning with /z-/ were permitted in CS.  The one occurence of ⰺⰸⱁ in Zogr. occurs before the word ⱁⰱⰾⰰⰽⰰ and is clearly a repetition of the ⱁ (ⰺⰸ ⱁⱁⰱⰾⰰⰽⰰ); modern Russian изо всех must result from an anological extension of the back-jer in въ, къ etc. to из (> изъ). I will reconstruct the CS preposition as jь z (similarly /bez/), but it must be understood that these form one phonological word with whatever follows them (mono- and bi-syllabic prepositions are anyway marked as clitics).
<br><br>
--Аминь is listed in the dictionary as occuring with both back and front jer, but based on Russian аминь I suspect that this apparent Schwanken results from lack of jers or front-jer-caused palatalisation in the dialects of the mss., and that аминь was the only originally acceptable form. Nevertheless, because it is an obvious loanword via the Greek, I have listed aminъ in column G as a doublet.
<br><br>
--The deletion of double /ss/ in въстати etc. is presumed to be CS, hence /vъstavъ/ not /vъsstavъ/ (though this rule has been inconsistenly followed as I have written e.g. *jьssypanъ to preserve the transparency of its prefixedness, which isn;t at all a good excuse because въстати is no less prefixed).

<br><br>
--The words вьсѣ, вьсѣкъ etc., where it is impossible to tell whether we have /vьśa/ with Glagolitic spelling of /a/ with <ⱑ> to indicate the (at least originally) soft /ś/ from PV3, or /vьśě/ with an unexplainable -ě nt. pl. desinence, are dealt with by taking /vьxa/ as the presumed direct CS predecessor to all forms, even though in texts like Zogr. вьсѣ is overwhelming (though вьса does occur). Because our only supposed evidence of PV3 of /x/ is in this lemma, we have nothing like /grěšьnica/ or /otьca/ to compare it to (i.e. we have no */grěšьniśa/ or */otьśa/.) With the exception of Bg. всеки the modern languages indicate a CS form /vьxa/ (RU. вяский etc.), as does later Church Slavonic вьсакъ and the occasional вьса spellings in even Glagolitic OCS, where the softness of the /ś/ has been given up even in writing. My instinct would be to assume that the Glagolitic mss. consistently write /śa/ as <ⱄⱑ> for the same reason that they consistently write /ńa/ etc. as <ⱀⱑ>: the <ⱄ> letter can denote both /s/ and /ś/, whereas <ⱌ> can only denote (originally soft) /c/, meaning <ⰰ> can be written after it without causing confusion between /c/ and a non-existent "hard counterpart" to /c/. The problem with this interpretation, though, is that it leaves us wondering why no Urkirchenslavisch letter was created for /ś/, as we believe that original /a/ after PV3-caused /c ʒ ś/ should have remained unchanged and not merged with the archiphoneme /Ǟ/ (which in Urksl. > /ě/), so there should have been /śa/ sequences in Urksl. even if there weren't /ĺa, ńa, ŕa/ sequences (and failing to distinguish in a newly invented alphabet /sa/ from /śa/ is less forgivable than failing to distinguish /ńě/ and /ně/).
<br><br>
--The North Slavic o-stem Isg. desinence /-ъmь/ has incorrectly been marked as an unetymological reflex of *omь in the annotation of Kiev Folia, and just completely ignored for Zographensis. Realy both /-ъмь/ and /-омь/ should be listed as doublets of each other, as the etymological Isg. ending is /a/ (cognate with the latin ablative and, according to Kortlandt, still present in Ru. вчера).
<br><br>
--Similarly the South Slavic -ę soft-stem desinence counterpart to -y has been considered regular CS, ignoring the fact that this is -ě in North Slavic.
<br><br>
--All foreign words which we expect to be jo-stems ending on -jь, but which have dative plural -омъ,  or -ov/-ev/ adjectives in е-овъ, are given CS forms with /ejo/, which marks out their foreignness because CS should have got rid of all such sequences by replacing them with /eje/ by that time. (Indeed, CS would certainly NOT have accepted /ejo/ and would certainly have assimilated them to /eje/ had they actually been borrowed in CS times; the presence of these deviant forms in the texts could well be an artefact of Urkirchenslavisch's lack of /j/, which meant jo-stems ending on CS *vowel+jь now ended on Urksl. *vowel+i and thus became detached from other jo-stems whose stems ended on consonants other than CS *j (mǫžь etc.). The Gk. words whose stems ended on vowels thus joined this newly detached subclass of jo-stems, and becaues of the relative rarity of native words of this subclass, the scribes wavered in their classification of the loanwords and occasionally just stuck o-stem endings onto them.)
<br><br>
--бол҄иі and lučьjь are marked as a long-form adjective even though the masc. nom. sg. short-form is never attested and the long-form is used where the English translation would use an indefinite article. See Diels 1963 p.199.
<br><br>
--The reflex of *sš in e.g. *jьs-šьdъ appears to always be simply /š/ and probably was so in CS, but I will write *jьsšьdъše for ꙇшьдъше that it may be more intuitive to search for. The same approach is taken for *jьs-c which is given always as *sc or *sk+FV, even though OCS here always has simply <ц>, e.g. *jьs-kěliti > ицѣлити (in this latter case we are actually justified because PV2 hasn't happened yet).
<br><br>
-- *bv is kept but really should be replaced with just /b/, even though keeping it would give the reader and searcher the opportunity to investigate the extent to which this simplification has been levelled away (e.g. Ru. обвал), as it was beyond doubt a pre-CS change, and /bv/ certainly was disallowed by the CS phonemic system.
<br><br>
--Devoicing assimilation of /z/ in prefixes like /jьz/- and /bez/- (e.g. ра<b>с</b>тръгнѫти) to the following consonant has been considered originally CS, with systems like Modern Bulgarian e.g. разпад seen as a later generalisation of the voiced variants.
</div></body>
</html>
