import { motion } from "framer-motion";
import { useInView } from "framer-motion";
import { useRef } from "react";
import { AlertTriangle, TrendingDown, Check, ArrowRight } from "lucide-react";

const PainSection = () => {
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, margin: "-100px" });

  const scrollToContact = () => {
    const element = document.getElementById("contato");
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
    }
  };

  return (
    <section id="economia" ref={ref} className="light-section bg-light py-20 md:py-32">
      <div className="container mx-auto px-4">
        <div className="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
          {/* Left Content */}
          <motion.div
            initial={{ opacity: 0, x: -50 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.6 }}
          >
            <div className="badge-danger mb-6">
              <AlertTriangle className="w-4 h-4" />
              Pare de perder dinheiro
            </div>

            <h2 className="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-forest leading-tight mb-6">
              Sua conta de luz é um aluguel que{" "}
              <span className="text-danger">nunca acaba</span>.
            </h2>

            <p className="text-forest/70 text-lg leading-relaxed mb-6">
              Imagine alugar um apartamento e, depois de 30 anos pagando, ele ainda não ser seu.
              É isso que você faz com a Equatorial.
            </p>

            <p className="text-forest/70 text-lg leading-relaxed mb-8">
              O gráfico ao lado mostra a realidade nua e crua: ou você compra o ativo (Solar)
              ou paga o triplo pelo aluguel (Conta de Luz).
            </p>

            <button
              onClick={scrollToContact}
              className="btn-gold flex items-center gap-3 group"
            >
              Quero Demitir a Concessionária
              <ArrowRight className="w-5 h-5 group-hover:translate-x-1 transition-transform" />
            </button>
          </motion.div>

          {/* Right - Chart Card */}
          <motion.div
            initial={{ opacity: 0, x: 50 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.6, delay: 0.2 }}
            className="light-card p-8"
          >
            <div className="flex items-center justify-between mb-2">
              <span className="text-sm font-semibold text-forest/60 uppercase tracking-wider">
                Custo em 25 Anos
              </span>
              <span className="text-xs bg-forest/10 text-forest px-3 py-1 rounded-full">
                Base: R$ 800/mês
              </span>
            </div>
            <p className="text-xs text-forest/50 mb-8">
              Inflação energética média de 10% a.a.
            </p>

            {/* Chart */}
            <div className="flex items-end justify-center gap-12 h-64 mb-8">
              {/* Equatorial Bar */}
              <motion.div
                initial={{ height: 0 }}
                animate={isInView ? { height: "100%" } : {}}
                transition={{ duration: 1, delay: 0.5 }}
                className="flex flex-col items-center"
              >
                <div className="w-24 bg-danger rounded-t-lg h-full flex flex-col items-center justify-center text-foreground">
                  <span className="text-sm font-medium">- R$ 1.08</span>
                  <span className="text-xs opacity-80">Milhões</span>
                </div>
              </motion.div>

              {/* Solux Bar */}
              <motion.div
                initial={{ height: 0 }}
                animate={isInView ? { height: "30%" } : {}}
                transition={{ duration: 1, delay: 0.7 }}
                className="flex flex-col items-center self-end"
              >
                <span className="text-xs bg-accent/20 text-forest px-3 py-1 rounded-full mb-2">
                  Investimento Único
                </span>
                <div className="w-24 bg-success rounded-t-lg h-full min-h-[80px]" />
              </motion.div>
            </div>

            {/* Labels */}
            <div className="flex items-center justify-center gap-12">
              <div className="text-center">
                <p className="font-display font-bold text-forest text-sm">EQUATORIAL</p>
                <div className="flex items-center gap-1 text-danger text-xs mt-1">
                  <TrendingDown className="w-3 h-3" />
                  Despesa Perdida
                </div>
              </div>
              <div className="text-center">
                <p className="font-display font-bold text-forest text-sm">SOLUX ENERGY</p>
                <div className="flex items-center gap-1 text-success text-xs mt-1">
                  <Check className="w-3 h-3" />
                  Patrimônio Seu
                </div>
              </div>
            </div>
          </motion.div>
        </div>
      </div>
    </section>
  );
};

export default PainSection;
