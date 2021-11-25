<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('details')->insert([
            [
                'book_id' => '1',
                'author' => 'Eka Kurniawan',
                'publisher' => 'Text Publishing Company',
                'year' => '2015',
                'description' => 'Compulsively readable, Beauty Is a Wound combines history, satire, family tragedy, legend, humour, and romance in an astonishing epic novel, in which the beautiful Indo prostitute Dewi Ayu and her four daughters are beset by every monstrosity.'
            ] ,
            [
                'book_id' => '2',
                'author' => 'Pramoedya Ananta Toer',
                'publisher' => 'Penguin Publishing Group',
                'year' => '1996',
                'description' => 'Minke is a young Javanese student of great intelligence and ambition. Living equally among the colonists and colonized of 19th-century Java, he battles against the confines of colonial strictures. It is his love for Annelies that enables him to find the strength to embrace his world.'
            ] ,
            [
                'book_id' => '3',
                'author' => 'A. Fuadi',
                'publisher' => 'Gramedia Pustaka Utama',
                'year' => '2011',
                'description' => '"Alif had never set foot outside of West Sumatra. He passed his childhood days searching for fallen durian fruit in the jungle, playing soccer on rice paddies, and swimming in the blue waters of Lake Maninjau. His mother wants him to attend an Islamic boarding school, a pesantren, while he dreams of public high school. Halfheartedly, he follows his mother’s wishes. He finds himself on a grueling three-day bus ride from Sumatra to Madani Pesantren (MP) in a remote village on Java. On his first day at MP, Alif is captivated by the powerful phrase man jadda wajada. He who gives his all will surely succeed. United by punishment, he quickly becomes friends with five boys from across the archipelago, and together they become known as the Fellowship of the Manara. Beneath the mosque’s minaret, the boys gaze at the clouds on the horizon, seeing in them their individual dreams of far-away lands, like America and Europe. Where would these dreams take them? They didn’t know. What they did know was: never underestimate dreams, no matter how high they may be. God truly is The Listener. The Land of Five Towers is the first book in a trilogy written by A. Fuadi—a former TEMPO & VOA reporter, photography buff, and a social entrepreneur. He went to George Washington University and Royal Holloway, University of London for his masters. A portion of the royalties from the trilogy are intended to build Komunitas Menara, a volunteer-based social organization which aims to provide free schools, libraries, clinics and soup kitchens for the less fortunate.'
            ] ,
            [
                'book_id' => '4',
                'author' => 'Gayle Laakmann McDowell',
                'publisher' => 'Wiley',
                'year' => '2011',
                'description' => 'The Google Resume is the only book available on how to win a coveted spot at Google, Microsoft, Apple, or other top tech firms.',
            ] ,
            [
                'book_id' => '5',
                'author' => 'Scott Galloway',
                'publisher' => 'Transworld',
                'year' => '2017',
                'description' => 'A fantastic, provocative book about where we are now and where we are going’ Phil Simon Huffington Post Amazon, Apple, Facebook, and Google are the four most influential companies on the planet. Just about everyone thinks they know how they got there. Just about everyone is wrong.'
            ] ,
            [
                'book_id' => '6',
                'author' => 'David A. Vise',
                'publisher' => 'Pan Macmillan',
                'year' => '2017',
                'description' => 'The Google Story is the definitive account of one of the most remarkable organizations of our time. '
            ] ,
            [
                'book_id' => '7',
                'author' => 'James Gleick',
                'publisher' => 'Open Road Media',
                'year' => '2011',
                'description' => 'An illuminating portrayal of Richard Feynman—a giant of twentieth century physics—from his childhood tinkering with radios, to his vital work on the Manhattan Project and beyond
Raised in Depression-era Rockaway Beach, physicist Richard Feynman was irreverent, eccentric, and childishly enthusiastic—a new kind of scientist in a field that was in its infancy. His quick mastery of quantum mechanics earned him a place at Los Alamos working on the Manhattan Project under J. Robert Oppenheimer, where the giddy young man held his own among the nation’s greatest minds. There, Feynman turned theory into practice, culminating in the Trinity test, on July 16, 1945, when the Atomic Age was born. He was only twenty-seven. And he was just getting started. In this sweeping biography, James Gleick captures the forceful personality of a great man, integrating Feynman’s work and life in a way that is accessible to laymen and fascinating for the scientists who follow in his footsteps.'
            ] ,
            [
                'book_id' => '8',
                'author' => 'Bruno Latour',
                'publisher' => 'Harvard University Press',
                'year' => '1987',
                'description' => 'About this edition
ISBN:9780674792913, 0674792912
Page count:288
Published:1987
Format:Paperback
Publisher:Harvard University Press
Language:English
Author:Bruno Latour
Science and technology have immense authority and influence in our society, yet their working remains little understood. The conventional perception of science in Western societies has been modified in recent years by the work of philosophers, sociologists and historians of science. In this book Bruno Latour brings together these different approaches to provide a lively and challenging analysis of science, demonstrating how social context and technical content are both essential to a proper understanding of scientific activity. Emphasizing that science can only be understood through its practice, the author examines science and technology in action: the role of scientific literature, the activities of laboratories, the institutional context of science in the modern world, and the means by which inventions and discoveries become accepted. From the study of scientific practice he develops an analysis of science as the building of networks. Throughout, Bruno Latour shows how a lively and realistic picture of science in action alters our conception of not only the natural sciences but also the social sciences and the sociology of knowledge in general.

This stimulating book, drawing on a wealth of examples from a wide range of scientific activities, will interest all philosophers, sociologists and historians of science, scientists and engineers, and students of the philosophy of social science and the sociology of knowledge.'
            ] ,
            [
                'book_id' => '9',
                'author' => 'James Gleick',
                'publisher' => 'Open Road Media',
                'year' => '2011',
                'description' => 'The “highly entertaining” New York Times bestseller, which explains chaos theory and the butterfly effect, from the author of The Information (Chicago Tribune).'
            ] ,
        ]);
    }
}
