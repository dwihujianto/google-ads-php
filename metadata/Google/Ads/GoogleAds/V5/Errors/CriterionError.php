<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/criterion_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V5\Errors;

class CriterionError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae4240a34676f6f676c652f6164732f676f6f676c656164732f76352f6572726f72732f637269746572696f6e5f6572726f722e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76352e6572726f72732292220a12437269746572696f6e4572726f72456e756d22fb210a0e437269746572696f6e4572726f72120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001121a0a16434f4e43524554455f545950455f52455155495245441002121d0a19494e56414c49445f4558434c554445445f43415445474f5259100312180a14494e56414c49445f4b4559574f52445f54455854100412190a154b4559574f52445f544558545f544f4f5f4c4f4e471005121e0a1a4b4559574f52445f4841535f544f4f5f4d414e595f574f5244531006121d0a194b4559574f52445f4841535f494e56414c49445f4348415253100712190a15494e56414c49445f504c4143454d454e545f55524c100812150a11494e56414c49445f555345525f4c495354100912190a15494e56414c49445f555345525f494e544552455354100a12240a20494e56414c49445f464f524d41545f464f525f504c4143454d454e545f55524c100b121d0a19504c4143454d454e545f55524c5f49535f544f4f5f4c4f4e47100c12220a1e504c4143454d454e545f55524c5f4841535f494c4c4547414c5f43484152100d122c0a28504c4143454d454e545f55524c5f4841535f4d554c5449504c455f53495445535f494e5f4c494e45100e12390a35504c4143454d454e545f49535f4e4f545f415641494c41424c455f464f525f544152474554494e475f4f525f4558434c5553494f4e100f12160a12494e56414c49445f544f5049435f504154481010121e0a1a494e56414c49445f594f55545542455f4348414e4e454c5f49441011121c0a18494e56414c49445f594f55545542455f564944454f5f4944101212270a23594f55545542455f564552544943414c5f4348414e4e454c5f444550524543415445441013122a0a26594f55545542455f44454d4f475241504849435f4348414e4e454c5f444550524543415445441014121b0a17594f55545542455f55524c5f554e535550504f52544544101512200a1c43414e4e4f545f4558434c5544455f43524954455249415f545950451016121c0a1843414e4e4f545f4144445f43524954455249415f54595045101712240a2043414e4e4f545f4558434c5544455f53494d494c41525f555345525f4c495354101a121f0a1b43414e4e4f545f4144445f434c4f5345445f555345525f4c495354101b123a0a3643414e4e4f545f4144445f444953504c41595f4f4e4c595f4c495354535f544f5f5345415243485f4f4e4c595f43414d504149474e53101c12350a3143414e4e4f545f4144445f444953504c41595f4f4e4c595f4c495354535f544f5f5345415243485f43414d504149474e53101d12370a3343414e4e4f545f4144445f444953504c41595f4f4e4c595f4c495354535f544f5f53484f5050494e475f43414d504149474e53101e12310a2d43414e4e4f545f4144445f555345525f494e544552455354535f544f5f5345415243485f43414d504149474e53101f12390a3543414e4e4f545f5345545f424944535f4f4e5f435249544552494f4e5f545950455f494e5f5345415243485f43414d504149474e53102012370a3343414e4e4f545f4144445f55524c535f544f5f435249544552494f4e5f545950455f464f525f43414d504149474e5f545950451021121b0a17494e56414c49445f435553544f4d5f414646494e495459106012190a15494e56414c49445f435553544f4d5f494e54454e54106112160a12494e56414c49445f49505f41444452455353102212150a11494e56414c49445f49505f464f524d4154102312160a12494e56414c49445f4d4f42494c455f4150501024121f0a1b494e56414c49445f4d4f42494c455f4150505f43415445474f5259102512180a14494e56414c49445f435249544552494f4e5f49441026121b0a1743414e4e4f545f5441524745545f435249544552494f4e102712240a2043414e4e4f545f5441524745545f4f42534f4c4554455f435249544552494f4e102812220a1e435249544552494f4e5f49445f414e445f545950455f4d49534d415443481029121c0a18494e56414c49445f50524f58494d4954595f524144495553102a12220a1e494e56414c49445f50524f58494d4954595f5241444955535f554e495453102b12200a1c494e56414c49445f535452454554414444524553535f4c454e475448102c121b0a17494e56414c49445f434954594e414d455f4c454e475448102d121d0a19494e56414c49445f524547494f4e434f44455f4c454e475448102e121d0a19494e56414c49445f524547494f4e4e414d455f4c454e475448102f121d0a19494e56414c49445f504f5354414c434f44455f4c454e475448103012180a14494e56414c49445f434f554e5452595f434f4445103112140a10494e56414c49445f4c41544954554445103212150a11494e56414c49445f4c4f4e474954554445103312360a3250524f58494d4954595f47454f504f494e545f414e445f414444524553535f424f54485f43414e4e4f545f42455f4e554c4c1034121d0a19494e56414c49445f50524f58494d4954595f414444524553531035121c0a18494e56414c49445f555345525f444f4d41494e5f4e414d45103612200a1c435249544552494f4e5f504152414d455445525f544f4f5f4c4f4e47103712260a2241445f5343484544554c455f54494d455f494e54455256414c535f4f5645524c4150103812320a2e41445f5343484544554c455f494e54455256414c5f43414e4e4f545f5350414e5f4d554c5449504c455f44415953103912250a2141445f5343484544554c455f494e56414c49445f54494d455f494e54455256414c103a12300a2c41445f5343484544554c455f45584345454445445f494e54455256414c535f5045525f4441595f4c494d4954103b122f0a2b41445f5343484544554c455f435249544552494f4e5f49445f4d49534d41544348494e475f4649454c4453103c12240a2043414e4e4f545f4249445f4d4f444946595f435249544552494f4e5f54595045103d12320a2e43414e4e4f545f4249445f4d4f444946595f435249544552494f4e5f43414d504149474e5f4f505445445f4f5554103e12280a2443414e4e4f545f4249445f4d4f444946595f4e454741544956455f435249544552494f4e103f121f0a1b4249445f4d4f4449464945525f414c52454144595f455849535453104012170a13464545445f49445f4e4f545f414c4c4f574544104112280a244143434f554e545f494e454c494749424c455f464f525f43524954455249415f545950451042122e0a2a43524954455249415f545950455f494e56414c49445f464f525f42494444494e475f53545241544547591043121c0a1843414e4e4f545f4558434c5544455f435249544552494f4e1044121b0a1743414e4e4f545f52454d4f56455f435249544552494f4e104512240a20494e56414c49445f50524f445543545f42494444494e475f43415445474f5259104c121c0a184d495353494e475f53484f5050494e475f53455454494e47104d121d0a19494e56414c49445f4d41544348494e475f46554e4354494f4e104e121f0a1b4c4f434154494f4e5f46494c5445525f4e4f545f414c4c4f574544104f12240a20494e56414c49445f464545445f464f525f4c4f434154494f4e5f46494c5445521062121b0a174c4f434154494f4e5f46494c5445525f494e56414c4944105012320a2e43414e4e4f545f4154544143485f43524954455249415f41545f43414d504149474e5f414e445f414447524f5550105112390a35484f54454c5f4c454e4754485f4f465f535441595f4f5645524c4150535f574954485f4558495354494e475f435249544552494f4e105212410a3d484f54454c5f414456414e43455f424f4f4b494e475f57494e444f575f4f5645524c4150535f574954485f4558495354494e475f435249544552494f4e1053122e0a2a4649454c445f494e434f4d50415449424c455f574954485f4e454741544956455f544152474554494e471054121d0a19494e56414c49445f574542504147455f434f4e444954494f4e105512210a1d494e56414c49445f574542504147455f434f4e444954494f4e5f55524c105612290a25574542504147455f434f4e444954494f4e5f55524c5f43414e4e4f545f42455f454d5054591057122e0a2a574542504147455f434f4e444954494f4e5f55524c5f554e535550504f525445445f50524f544f434f4c1058122e0a2a574542504147455f434f4e444954494f4e5f55524c5f43414e4e4f545f42455f49505f41444452455353105912450a41574542504147455f434f4e444954494f4e5f55524c5f444f4d41494e5f4e4f545f434f4e53495354454e545f574954485f43414d504149474e5f53455454494e47105a12310a2d574542504147455f434f4e444954494f4e5f55524c5f43414e4e4f545f42455f5055424c49435f535546464958105b122f0a2b574542504147455f434f4e444954494f4e5f55524c5f494e56414c49445f5055424c49435f535546464958105c12390a35574542504147455f434f4e444954494f4e5f55524c5f56414c55455f545241434b5f56414c55455f4e4f545f535550504f52544544105d123c0a38574542504147455f435249544552494f4e5f55524c5f455155414c535f43414e5f484156455f4f4e4c595f4f4e455f434f4e444954494f4e105e12370a33574542504147455f435249544552494f4e5f4e4f545f535550504f525445445f4f4e5f4e4f4e5f4453415f41445f47524f5550105f12370a3343414e4e4f545f5441524745545f555345525f4c4953545f464f525f534d4152545f444953504c41595f43414d504149474e531063122a0a264c495354494e475f53434f50455f544f4f5f4d414e595f44494d454e53494f4e5f5459504553106412270a234c495354494e475f53434f50455f544f4f5f4d414e595f494e5f4f50455241544f52531065122b0a274c495354494e475f53434f50455f494e5f4f50455241544f525f4e4f545f535550504f52544544106612240a204455504c49434154455f4c495354494e475f44494d454e53494f4e5f54595045106712250a214455504c49434154455f4c495354494e475f44494d454e53494f4e5f56414c5545106812300a2c43414e4e4f545f5345545f424944535f4f4e5f4c495354494e475f47524f55505f5355424449564953494f4e106912230a1f494e56414c49445f4c495354494e475f47524f55505f484945524152434859106a122b0a274c495354494e475f47524f55505f554e49545f43414e4e4f545f484156455f4348494c4452454e106b12320a2e4c495354494e475f47524f55505f5355424449564953494f4e5f52455155495245535f4f54484552535f43415345106c123a0a364c495354494e475f47524f55505f52455155495245535f53414d455f44494d454e53494f4e5f545950455f41535f5349424c494e4753106d12200a1c4c495354494e475f47524f55505f414c52454144595f455849535453106e12200a1c4c495354494e475f47524f55505f444f45535f4e4f545f4558495354106f12230a1f4c495354494e475f47524f55505f43414e4e4f545f42455f52454d4f5645441070121e0a1a494e56414c49445f4c495354494e475f47524f55505f545950451071122a0a264c495354494e475f47524f55505f4144445f4d41595f4f4e4c595f5553455f54454d505f49441072121a0a164c495354494e475f53434f50455f544f4f5f4c4f4e47107312250a214c495354494e475f53434f50455f544f4f5f4d414e595f44494d454e53494f4e531074121a0a164c495354494e475f47524f55505f544f4f5f4c4f4e471075121f0a1b4c495354494e475f47524f55505f545245455f544f4f5f444545501076121d0a19494e56414c49445f4c495354494e475f44494d454e53494f4e107712220a1e494e56414c49445f4c495354494e475f44494d454e53494f4e5f54595045107842ee010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e6572726f72734213437269746572696f6e4572726f7250726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f6572726f72733b6572726f7273a20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56352e4572726f7273ca021e476f6f676c655c4164735c476f6f676c654164735c56355c4572726f7273ea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a4572726f7273620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}
