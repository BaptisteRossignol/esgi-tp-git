<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'symfony/website-skeleton';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'doctrine/annotations' => '1.10.4@bfe91e31984e2ba76df1c1339681770401ec262f',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.0.2@a3c6479858989e242a2465972b4f7a8642baf0d4',
  'doctrine/dbal' => '2.11.1@6e6903cd5e3a5be60a79439e3ee8fe126f78fe86',
  'doctrine/doctrine-bundle' => '2.1.2@f5153089993e1230f5d8acbd8e126014d5a63e17',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => 'v2.7.3@d95e03ba660d50d785a9925f41927fef0ee553cf',
  'doctrine/persistence' => '2.0.0@1dee036f22cd5dc0bc12132f1d1c38415907be55',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '2.1.22@68e418ec08fbfc6f58f6fd2eea70ca8efc8cc7d5',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.3.0@1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'monolog/monolog' => '2.1.1@f9eee5cec93dfb313a38b6b288741e84e53f02d5',
  'ocramius/proxy-manager' => '2.8.0@ac1dd414fd114cfc0da9930e0ab46063c2f5e62a',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/asset' => 'v5.1.6@ef0bcafce1c14bbf49838b01e990a8bfafd071eb',
  'symfony/cache' => 'v5.1.6@72b4c2bfe8b40a0d7365943cfaaf1658217e2f69',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v5.1.6@6ad8be6e1280f6734150d8a04a9160dd34ceb191',
  'symfony/console' => 'v5.1.6@04c3a31fe8ea94b42c9e2d1acc93d19782133b00',
  'symfony/dependency-injection' => 'v5.1.6@61e9e7be2c30a779deb26e555243eaca9d26b0f3',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v5.1.6@f2febb754027ae501cd8d9108b33df285c701381',
  'symfony/dotenv' => 'v5.1.6@f406eaad1231415bf753fbef5aef267a787af4e5',
  'symfony/error-handler' => 'v5.1.6@d2f1d4996d5499f1261164d10080e4120001f041',
  'symfony/event-dispatcher' => 'v5.1.6@d5de97d6af175a9e8131c546db054ca32842dd0f',
  'symfony/event-dispatcher-contracts' => 'v2.2.0@0ba7d54483095a198fa51781bc608d17e84dffa2',
  'symfony/expression-language' => 'v5.1.6@e16e66c309214143cc01dae6d1ff1ee13e7be4fa',
  'symfony/filesystem' => 'v5.1.6@f3194303d3077829dbbc1d18f50288b2a01146f2',
  'symfony/finder' => 'v5.1.6@2c3ba7ad6884e6c4451ce2340e2dc23f6fa3e0d8',
  'symfony/flex' => 'v1.9.4@115e67f76ba95d70946a6e0b15d4578bf04927c3',
  'symfony/form' => 'v5.1.6@161411a1016b4ba531a82b262b77119f25df4010',
  'symfony/framework-bundle' => 'v5.1.6@9bb1c5b6286530a3d8a7a76612db9e983cfc72c4',
  'symfony/http-client' => 'v5.1.6@4a5f2750b54e3cfc5b6711dd78fdbac6563ee7bf',
  'symfony/http-client-contracts' => 'v2.2.0@3a5d0fe7908daaa23e3dbf4cee3ba4bfbb19fdd3',
  'symfony/http-foundation' => 'v5.1.6@6cca6b2e4b69fc5bace160d14cf1ee5f71483db4',
  'symfony/http-kernel' => 'v5.1.6@17227644c3c66dcf32bdfeceff4364d090cd6756',
  'symfony/intl' => 'v5.1.6@9381fd69ce6407041185aa6f1bafbf7d65f0e66a',
  'symfony/mailer' => 'v5.1.6@0c4f93173b7e315f4035c401b8ddfa9b149b389c',
  'symfony/mime' => 'v5.1.6@4404d6545125863561721514ad9388db2661eec5',
  'symfony/monolog-bridge' => 'v5.1.6@37255bdafc2f94155a90154b1f9878eae020106d',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/notifier' => 'v5.1.6@19699652eaa69b0389bc985853f29b8e9177b1cf',
  'symfony/options-resolver' => 'v5.1.6@4c7e155bf7d93ea4ba3824d5a14476694a5278dd',
  'symfony/orm-pack' => 'v2.0.0@46aa731f213140388ee11ff3d2b6776a3b4a0d90',
  'symfony/polyfill-intl-grapheme' => 'v1.18.1@b740103edbdcc39602239ee8860f0f45a8eb9aa5',
  'symfony/polyfill-intl-icu' => 'v1.18.1@4e45a6e39041a9cc78835b11abc47874ae302a55',
  'symfony/polyfill-intl-idn' => 'v1.18.1@5dcab1bc7146cf8c1beaa4502a3d9be344334251',
  'symfony/polyfill-intl-normalizer' => 'v1.18.1@37078a8dd4a2a1e9ab0231af7c6cb671b2ed5a7e',
  'symfony/polyfill-mbstring' => 'v1.18.1@a6977d63bf9a0ad4c65cd352709e230876f9904a',
  'symfony/polyfill-php73' => 'v1.18.1@fffa1a52a023e782cdcc221d781fe1ec8f87fcca',
  'symfony/polyfill-php80' => 'v1.18.1@d87d5766cbf48d72388a9f6b85f280c8ad51f981',
  'symfony/process' => 'v5.1.6@d3a2e64866169586502f0cd9cab69135ad12cee9',
  'symfony/property-access' => 'v5.1.6@4c43f7ff784e1e3ee1c96e15f76b342af6617b39',
  'symfony/property-info' => 'v5.1.6@22518930091e0bdb249694efc509e3697f7e325e',
  'symfony/routing' => 'v5.1.6@d36e06eb02a55522a8eed070c1cbc3dc3c389876',
  'symfony/security-bundle' => 'v5.1.6@c9cbe7d78d734062365e2af6d8d475d8888a7bcc',
  'symfony/security-core' => 'v5.1.6@ae0d56746a9071e11015e8372d42e1e04fe9361d',
  'symfony/security-csrf' => 'v5.1.6@f1659a16028a50766dbffa73160fb94599131014',
  'symfony/security-guard' => 'v5.1.6@85c368be963e9f0df9e93d830f966fc0af531703',
  'symfony/security-http' => 'v5.1.6@b5c973666a1aee1294391db843c97dc83fd27c14',
  'symfony/serializer' => 'v5.1.6@acffef33552965108a883a0bdc19a0264950779e',
  'symfony/serializer-pack' => 'v1.0.3@9bbce72dcad0cca797b678d3bfb764cf923ab28a',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v5.1.6@0f7c58cf81dbb5dd67d423a89d577524a2ec0323',
  'symfony/string' => 'v5.1.6@4a9afe9d07bac506f75bcee8ed3ce76da5a9343e',
  'symfony/translation' => 'v5.1.6@e3cdd5119b1b5bf0698c351b8ee20fb5a4ea248b',
  'symfony/translation-contracts' => 'v2.2.0@77ce1c3627c9f39643acd9af086631f842c50c4d',
  'symfony/twig-bridge' => 'v5.1.6@ad3c3e89353749dcead9ee25388177ebbb4569a1',
  'symfony/twig-bundle' => 'v5.1.6@8898ef8aea8fa48638e15ce00c7c6318ce570ce1',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v5.1.6@30f946a6d12518b806a785a4ba83c820f6f807ec',
  'symfony/var-dumper' => 'v5.1.6@c976c115a0d788808f7e71834c8eb0844f678d02',
  'symfony/var-exporter' => 'v5.1.6@8b858508e49beb257fd635104c3d449a8113e8fe',
  'symfony/web-link' => 'v5.1.6@ba2554887e34e693e3888f23f83c72d5ce04bfb2',
  'symfony/yaml' => 'v5.1.6@e147a68cb66a8b510f4b7481fe4da5b2ab65ec6a',
  'twig/extra-bundle' => 'v3.0.5@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => 'v3.0.5@9b76b1535483cdf4edf01bb787b0217b62bd68a5',
  'webimpress/safe-writer' => '2.1.0@5cfafdec5873c389036f14bf832a5efc9390dcdd',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'symfony/browser-kit' => 'v5.1.6@7abd647882030b69b8b75f9400554474b78c65c2',
  'symfony/css-selector' => 'v5.1.6@e544e24472d4c97b2d11ade7caacd446727c6bf9',
  'symfony/debug-bundle' => 'v5.1.6@3f4bcea52678eedf19260973217f5ae7b835edf5',
  'symfony/debug-pack' => 'v1.0.8@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dom-crawler' => 'v5.1.6@6d6885e167aad0af4128b392f22d8f2a33dd88ec',
  'symfony/maker-bundle' => 'v1.21.1@da629093c7bf9abd9a6a0f232a43bbb1b88de68d',
  'symfony/phpunit-bridge' => 'v5.1.6@6753ea4cb2dab705e819b1ddd8833a5c98338650',
  'symfony/profiler-pack' => 'v1.0.5@29ec66471082b4eb068db11eb4f0a48c277653f7',
  'symfony/test-pack' => 'v1.0.6@ff87e800a67d06c423389f77b8209bc9dc469def',
  'symfony/web-profiler-bundle' => 'v5.1.6@4b02edb4c4c2d57b94e62904e45f3484b29d36eb',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  'symfony/website-skeleton' => 'v5.1.99@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
