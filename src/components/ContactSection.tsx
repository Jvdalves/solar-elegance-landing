import { motion, useInView } from "framer-motion";
import { useRef, useState } from "react";
import { Lock, ArrowRight, CheckCircle, Calculator, FileText } from "lucide-react";
import { useToast } from "@/hooks/use-toast";

const billRanges = [
  "R$ 300 - R$ 500",
  "R$ 500 - R$ 800",
  "R$ 800 - R$ 1.200",
  "R$ 1.200 - R$ 2.000",
  "Acima de R$ 2.000",
];

const benefits = [
  { icon: CheckCircle, text: "Sem compromisso financeiro" },
  { icon: Calculator, text: "Dimensionamento exato (Engenharia)" },
  { icon: FileText, text: "Retorno de investimento calculado" },
];

const ContactSection = () => {
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, margin: "-100px" });
  const { toast } = useToast();

  const [formData, setFormData] = useState({
    name: "",
    whatsapp: "",
    neighborhood: "",
    billRange: "",
  });

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    
    // Basic validation
    if (!formData.name || !formData.whatsapp || !formData.billRange) {
      toast({
        title: "Preencha todos os campos obrigatórios",
        description: "Por favor, complete o formulário antes de enviar.",
        variant: "destructive",
      });
      return;
    }

    toast({
      title: "Solicitação enviada com sucesso! 🎉",
      description: "Nossa equipe entrará em contato em breve.",
    });

    // Reset form
    setFormData({ name: "", whatsapp: "", neighborhood: "", billRange: "" });
  };

  return (
    <section id="contato" ref={ref} className="bg-background section-padding relative">
      {/* Top curve from light section */}
      <div className="absolute top-0 left-0 right-0 h-24 overflow-hidden rotate-180">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" className="absolute bottom-0 w-full h-full">
          <path
            d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V120Z"
            fill="hsl(210 40% 98%)"
          />
        </svg>
      </div>

      <div className="container mx-auto px-4 relative z-10">
        <div className="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
          {/* Left Content */}
          <motion.div
            initial={{ opacity: 0, x: -50 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.6 }}
          >
            <h2 className="font-display text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-6">
              O sol de amanhã pode gerar{" "}
              <span className="text-accent">lucro</span> ou despesa.
            </h2>

            <p className="text-foreground/70 text-lg leading-relaxed mb-8">
              Pare de financiar a ineficiência da concessionária. Preencha o formulário para
              receber sua Análise de Viabilidade Econômica.
            </p>

            {/* Benefits */}
            <div className="space-y-4">
              {benefits.map((benefit, index) => (
                <motion.div
                  key={index}
                  initial={{ opacity: 0, x: -20 }}
                  animate={isInView ? { opacity: 1, x: 0 } : {}}
                  transition={{ duration: 0.4, delay: 0.3 + index * 0.1 }}
                  className="flex items-center gap-3"
                >
                  <div className="w-8 h-8 rounded-full bg-accent flex items-center justify-center flex-shrink-0">
                    <benefit.icon className="w-4 h-4 text-accent-foreground" />
                  </div>
                  <span className="text-foreground/80">{benefit.text}</span>
                </motion.div>
              ))}
            </div>
          </motion.div>

          {/* Right - Form */}
          <motion.div
            initial={{ opacity: 0, x: 50 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.6, delay: 0.2 }}
            className="light-card"
          >
            <div className="text-center mb-6">
              <span className="text-xs font-semibold text-forest/40 uppercase tracking-widest">
                Proposta Personalizada
              </span>
            </div>

            <form onSubmit={handleSubmit} className="space-y-4">
              {/* Name */}
              <div>
                <label htmlFor="name" className="block text-sm font-medium text-forest/70 mb-2">
                  Nome Completo
                </label>
                <input
                  type="text"
                  id="name"
                  placeholder="Digite seu nome"
                  value={formData.name}
                  onChange={(e) => setFormData({ ...formData, name: e.target.value })}
                  className="w-full px-4 py-3 rounded-lg border border-forest/10 bg-foreground text-forest placeholder:text-forest/40 focus:ring-2 focus:ring-accent focus:border-transparent outline-none transition-all"
                />
              </div>

              {/* WhatsApp */}
              <div>
                <label htmlFor="whatsapp" className="block text-sm font-medium text-forest/70 mb-2">
                  WhatsApp
                </label>
                <input
                  type="tel"
                  id="whatsapp"
                  placeholder="(91) 99999-9999"
                  value={formData.whatsapp}
                  onChange={(e) => setFormData({ ...formData, whatsapp: e.target.value })}
                  className="w-full px-4 py-3 rounded-lg border border-forest/10 bg-foreground text-forest placeholder:text-forest/40 focus:ring-2 focus:ring-accent focus:border-transparent outline-none transition-all"
                />
              </div>

              {/* Neighborhood */}
              <div>
                <label htmlFor="neighborhood" className="block text-sm font-medium text-forest/70 mb-2">
                  Bairro ou Condomínio
                </label>
                <input
                  type="text"
                  id="neighborhood"
                  placeholder="Ex: Batista Campos"
                  value={formData.neighborhood}
                  onChange={(e) => setFormData({ ...formData, neighborhood: e.target.value })}
                  className="w-full px-4 py-3 rounded-lg border border-forest/10 bg-foreground text-forest placeholder:text-forest/40 focus:ring-2 focus:ring-accent focus:border-transparent outline-none transition-all"
                />
              </div>

              {/* Bill Range */}
              <div>
                <label htmlFor="billRange" className="block text-sm font-medium text-forest/70 mb-2">
                  Média da Conta de Luz
                </label>
                <select
                  id="billRange"
                  value={formData.billRange}
                  onChange={(e) => setFormData({ ...formData, billRange: e.target.value })}
                  className="w-full px-4 py-3 rounded-lg border border-forest/10 bg-foreground text-forest focus:ring-2 focus:ring-accent focus:border-transparent outline-none transition-all"
                >
                  <option value="">Selecione o valor aproximado</option>
                  {billRanges.map((range) => (
                    <option key={range} value={range}>
                      {range}
                    </option>
                  ))}
                </select>
              </div>

              {/* Submit Button */}
              <button
                type="submit"
                className="btn-gold w-full flex items-center justify-center gap-3 group mt-6"
              >
                Quero Minha Análise Grátis
                <ArrowRight className="w-5 h-5 group-hover:translate-x-1 transition-transform" />
              </button>

              {/* Security note */}
              <div className="flex items-center justify-center gap-2 text-forest/40 text-xs mt-4">
                <Lock className="w-3 h-3" />
                <span>Seus dados estão 100% seguros.</span>
              </div>
            </form>
          </motion.div>
        </div>
      </div>
    </section>
  );
};

export default ContactSection;
